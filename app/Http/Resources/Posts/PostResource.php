<?php

namespace App\Http\Resources\Posts;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Request;

class PostResource extends BaseResource
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
