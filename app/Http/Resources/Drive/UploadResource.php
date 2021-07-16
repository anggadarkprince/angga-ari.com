<?php

namespace App\Http\Resources\Drive;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'is_directory' => $this->is_directory,
            'file_name' => $this->name,
            'source' => $this->source,
            'path' => $this->is_directory ? null : Storage::url($this->source),
            'size' => $this->size,
            'mime' => $this->mime,
            'caption' => $this->caption,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
        ];
    }
}