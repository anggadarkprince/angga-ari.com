<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;

class Uploader extends Model
{
    /**
     * Upload raw data to specific destination.
     *
     * @param $sources
     * @param string $outputs
     * @param string $type
     * @return array
     */
    public function upload($sources, $outputs = '', $type = 'image')
    {
        switch ($type) {
            case 'image':
                return $this->uploadImage($sources, $outputs);
                break;
            default:
                return $this->uploadFile($sources, $outputs);
                break;
        }
    }

    /**
     * Upload general file without resizing like image file.
     *
     * @param $sources
     * @param $outputs
     * @return array
     */
    public function uploadFile($sources, $outputs = '')
    {
        if (!is_array($sources)) {
            $sources = [$sources];
        }

        if (!is_array($outputs)) {
            $outputs = [
                ['destination' => empty($outputs) ? ('_temp/' . uniqid()) : $outputs]
            ];
        } else {
            if (!key_exists(0, $outputs)) {
                $outputs = [$outputs];
            }
        }

        $results = [];

        foreach ($sources as $source) {
            foreach ($outputs as $output) {
                $path = key_exists('destination', $output) ? $output['destination'] : '_temp/' . uniqid();
                $storage = key_exists('storage', $output) ? $output['storage'] : 'local';

                if (Storage::disk($storage)->put($path, $source)) {
                    $results[] = $path;
                }
            }
        }

        return $results;
    }

    /**
     * Upload image to specific location with specific options.
     *
     * @param $sources
     * @param $outputs
     * @return array
     */
    public function uploadImage($sources, $outputs)
    {
        if (!is_array($sources)) {
            $sources = [$sources];
        }

        if (!is_array($outputs)) {
            $outputs = [
                ['destination' => empty($outputs) ? ('_temp/' . uniqid()) : $outputs]
            ];
        } else {
            if (!key_exists(0, $outputs)) {
                $outputs = [$outputs];
            }
        }

        $results = [];

        foreach ($sources as $source) {
            $image = Image::make($source);

            foreach ($outputs as $output) {
                if (!key_exists('width', $output)) {
                    $output['width'] = null;
                }
                if (!key_exists('height', $output)) {
                    $output['height'] = null;
                }
                if(!empty($output['width']) && !empty($output['height'])) {
                    $image->resize($output['width'], $output['height']);
                }

                $path = key_exists('destination', $output) ? $output['destination'] : '_temp/' . uniqid() . '.jpg';
                $encode = key_exists('encode', $output) ? $output['encode'] : 'jpg';
                $quality = key_exists('quality', $output) ? $output['quality'] : 90;
                $storage = key_exists('storage', $output) ? $output['storage'] : 'local';

                if (Storage::disk($storage)->put($path, $image->encode($encode, $quality))) {
                    $results[] = $path;
                }
            }
        }

        return $results;
    }

    /**
     * Move file from temp, check if it's image files.
     *
     * @param $source
     * @param $outputs
     * @param string $type
     * @return array|bool
     * @throws \Exception
     */
    public function moveFromTemp($source, $outputs, $type = 'image')
    {
        switch ($type) {
            case 'image':
                return $this->moveImageFromTemp($source, $outputs);
                break;
            default:
                $sources = [];
                if(!is_array($source)) {
                    $sources = [$source];
                }
                foreach ($sources as $src) {
                    if (Storage::disk('local')->exists($src)) {
                        if(is_array($outputs)) {
                            foreach ($outputs as $output) {
                                Storage::copy($src, $output);
                            }
                            Storage::delete($source);
                        } else {
                            Storage::move($src, $outputs);
                        }
                    }
                }
                break;
        }
        return true;
    }

    /**
     * Move image from temp to specific destination with multiple option of outputs.
     *
     * @param $sources
     * @param $outputs
     * @return array
     * @throws \Exception
     */
    public function moveImageFromTemp($sources, $outputs)
    {
        if(!is_array($sources)) {
            $sources = [$sources];
        }

        if(!is_array($outputs)) {
            $outputs = [
                ['destination' => $outputs]
            ];
        } else {
            if (!key_exists(0, $outputs)) {
                $outputs = [$outputs];
            }
        }

        $results = [];

        foreach ($sources as $source) {
            if (Storage::disk('local')->exists($source)) {
                $image = Image::make(Storage::get($source));

                foreach ($outputs as $output) {
                    if (!key_exists('width', $output)) {
                        $output['width'] = null;
                    }
                    if (!key_exists('height', $output)) {
                        $output['height'] = null;
                    }

                    if($output['width'] == null || $output['height'] == null) {
                        $image->resize($output['width'], $output['height'], function (Constraint $constraint) {
                            $constraint->aspectRatio();
                        });
                    } else {
                        $image->resize($output['width'], $output['height']);
                    }

                    if (!key_exists('destination', $output)) {
                        throw new \Exception('Destination is not found');
                    }

                    $path = $output['destination'];
                    $encode = key_exists('encode', $output) ? $output['encode'] : 'jpg';
                    $quality = key_exists('quality', $output) ? $output['quality'] : 90;
                    $storage = key_exists('storage', $output) ? $output['storage'] : 'public';

                    if (Storage::disk($storage)->put($path, $image->encode($encode, $quality))) {
                        $delete = Storage::delete($source);
                        $results[] = [
                            'file' => $source,
                            'output' => $path,
                            'status' => true,
                            'message' => $delete ? 'The file is moved' : 'The old file can not be deleted'
                        ];
                    }
                }
            } else {
                $results[] = [
                    'file' => $source,
                    'output' => '',
                    'status' => false,
                    'message' => 'File not found'
                ];
            }
        }

        return $results;
    }
}
