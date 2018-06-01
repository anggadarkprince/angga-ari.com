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
     * @param $destination
     * @param $options
     * @return array
     */
    public function uploadImage($source, $destination, $options)
    {
        $image = Image::make($source);

        if (!key_exists(0, $options)) {
            $options = [$options];
        }

        $results = [];

        foreach ($options as $option) {
            if (key_exists('width', $option) && key_exists('height', $option)) {
                $image->resize($option['width'], $option['height']);
            }

            $path = key_exists('filename', $option) ? $destination . $option['filename'] : $destination . uniqid();
            $encode = key_exists('encode', $option) ? $option['encode'] : 'jpg';
            $quality = key_exists('quality', $option) ? $option['quality'] : 80;
            $storage = key_exists('storage', $option) ? $option['storage'] : 'public';

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
    public function moveImageFromTemp($source, $destination, $outputs)
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

                $path = key_exists('filename', $output) ? $destination . $output['filename'] : $destination . uniqid();
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
