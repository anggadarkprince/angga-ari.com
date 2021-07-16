<?php

namespace App\Http\Resources\Drive;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Request;

class DirectoryResource extends BaseResource
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
            'parent' => $this->parent,
            'directory_name' => $this->name,
            'description' => $this->description,
            'total_item' => $this->contents->count(),
            'contents' => UploadResource::collection($this->contents),
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
        ];
    }
}
