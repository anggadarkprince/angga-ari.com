<?php

namespace App\Http\Resources\Vault;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Request;

class PasswordResource extends BaseResource
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
