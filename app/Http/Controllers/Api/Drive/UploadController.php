<?php

namespace App\Http\Controllers\Api\Drive;

use App\Http\Controllers\Controller;
use App\Http\Requests\Drive\UploadRequest;
use App\Http\Resources\Drive\UploadResource;
use App\Models\Upload;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Store file stream to storage.
     *
     * @param UploadRequest $request
     * @return UploadResource|JsonResponse
     * @throws AuthorizationException
     */
    public function create(UploadRequest $request)
    {
        $this->authorize('delete', Upload::class);

        $caption = $request->input('caption');
        $fileSource = $request->file('source');
        $fileName = $request->input('file_name');
        $filePath = 'drive/' . $request->user()->id;

        $result = Storage::putFile($filePath, $fileSource);

        //$resource = fopen($fileSource->getRealPath(), 'r+');
        //$result = Storage::put($filePath, $resource);

        if ($result) {
            $upload = $request->user()->uploads()->create([
                'source' => $result,
                'name' => $fileName ?? $fileSource->getClientOriginalName(),
                'size' => $fileSource->getSize(),
                'mime' => $fileSource->getMimeType(),
                'caption' => $caption,
            ]);

            return new UploadResource($upload);
        }

        return Response::json([
            'status' => 'Error',
            'code' => 500,
            'message' => __('Upload failed, try again later'),
            'error' => [
                'code' => $fileSource->getError(),
                'message' => $fileSource->getErrorMessage()
            ]
        ], 500);
    }

    /**
     * Delete uploaded file.
     *
     * @param Upload $upload
     * @return UploadResource|JsonResponse
     * @throws AuthorizationException
     */
    public function delete(Upload $upload)
    {
        $this->authorize('delete', $upload);

        if ($upload->delete()) {
            if (Storage::delete($upload->source)) {
                return new UploadResource($upload);
            }
        }

        return Response::json([
            'status' => 'Error',
            'code' => 500,
            'message' => __('Delete source file failed, try again later'),
        ], 500);
    }
}
