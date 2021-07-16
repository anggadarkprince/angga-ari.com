<?php

namespace App\Http\Controllers\Api\Vault;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class MasterPassword extends Controller
{
    /**
     * Check master password.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        if (Hash::check($request->post('master_password'), $request->user()->setting('vault.master_password'))) {
            return Response::json([
                'status' => 'OK',
                'code' => 200,
                'message' => __('Master password is confirmed')
            ]);
        }

        return Response::json([
            'status' => 'Unauthorized',
            'code' => 401,
            'message' => __('Incorrect master password')
        ], 401);
    }
}
