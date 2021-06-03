<?php

namespace App\Http\Controllers;

use App\Models\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Upload data to storage.
     *
     * @param Request $request
     * @param Uploader $uploader
     * @return array|void
     */
    public function upload(Request $request, Uploader $uploader)
    {
        if ($request->ajax()) {
            $type = $request->get('type', 'raw');
            $file = $request->get('file');
            $oldFile = $request->get('old_file');

            $output = '_temp/' . uniqid();

            if ($type == 'raw') {
                $file = $request->file('file');
                $output .= '.' . $file->getClientOriginalExtension();
            } else if ($type == 'base64') {
                $encodedData = substr($file, strpos($file, ",") + 1);
                $file = base64_decode($encodedData);
            }

            $result = $uploader->upload($file, $output, $type);

            if(!empty($result)) {
                if(!empty($oldFile)) {
                    if (Storage::disk('local')->exists($oldFile)) {
                        Storage::delete($oldFile);
                    }
                }
            }

            return $result;
        }
        return abort(400, 'Ajax request only');
    }
}
