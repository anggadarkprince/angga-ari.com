<?php

namespace App\Http\Resources\Drive;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Request;

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
        return parent::toArray($request);
    }
}
