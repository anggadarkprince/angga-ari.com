<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseCollection extends ResourceCollection
{
    public function __construct($resource, $code = 200, $status = 'OK')
    {
        parent::__construct($resource);

        $this->with['code'] = $code;
        $this->with['status'] = $status;

        $this->response()->setStatusCode($code);
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function toResponse($request)
    {
        return parent::toResponse($request)->setStatusCode($this->with['code'] ?? 200);
    }
}
