<?php

namespace App\Http\Resources\Wallet;

use App\Http\Resources\BaseCollection;
use Illuminate\Http\Request;

class WalletCollection extends BaseCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
