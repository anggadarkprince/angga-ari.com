<?php

namespace App\Http\Resources\Posts;

use App\Http\Resources\BaseCollection;
use Illuminate\Http\Request;

class PostCollection extends BaseCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
