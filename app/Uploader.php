<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Uploader extends Model
{
    /**
     * Upload image to specific location with specific options.
     *
     * @param $source
     * @param $outputs
     * @return array
     */
    public function uploadImage($source, $outputs)
    {
        $image = Image::make($source);

        if (!key_exists(0, $outputs)) {
            $outputs = [$outputs];
        }

        $results = [];

        foreach ($outputs as $output) {
            if (key_exists('width', $output) && key_exists('height', $output)) {
                $image->resize($output['width'], $output['height']);
            }

            $path = key_exists('destination', $output) ? $output['destination'] : '_temp/' . uniqid();
            $encode = key_exists('encode', $output) ? $output['encode'] : 'jpg';
            $quality = key_exists('quality', $output) ? $output['quality'] : 80;
            $storage = key_exists('storage', $output) ? $output['storage'] : 'public';

            if (Storage::disk($storage)->put($path, $image->encode($encode, $quality))) {
                $results[] = $path;
            }
        }

        return $results;
    }

    /**
     * Move image from temp to specific destination with multiple option of outputs.
     *
     * @param $source
     * @param $destination
     * @param $outputs
     * @return array
     */
    public function moveImageFromTemp($source, $outputs)
    {
        if (!key_exists(0, $outputs)) {
            $outputs = [$outputs];
        }

        $results = [];

        if (Storage::disk('local')->exists($source)) {
            $image = Image::make( Storage::get($source));

            foreach ($outputs as $output) {
                if (key_exists('width', $output) && key_exists('height', $output)) {
                    $image->resize($output['width'], $output['height']);
                }

                if(!key_exists('destination', $output)) {
                    throw new \Exception('Destination is not found');
                }

                $path = $output['destination'];
                $encode = key_exists('encode', $output) ? $output['encode'] : 'jpg';
                $quality = key_exists('quality', $output) ? $output['quality'] : 80;
                $storage = key_exists('storage', $output) ? $output['storage'] : 'public';

                if (Storage::disk($storage)->put($path, $image->encode($encode, $quality))) {
                    Storage::delete($source);
                    $results[] = $path;
                }
            }
        }

        return $results;
    }
}
