<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    /**
     * Login api.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return Response::json([
                'status' => 'Unauthenticated',
                'code' => 401,
                'message' => __('User or password wrong'),
            ]);
        }

        $token = Auth()->user()->createToken('authToken')->plainTextToken;

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => auth()->user()
            ],
        ]);
    }


    /**
     * Logout user api.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        $result = $request->user()->currentAccessToken()->delete();

        if ($result) {
            return Response::json([
                'status' => 'OK',
                'code' => 200,
                'message' => __('Token is revoked'),
            ]);
        }

        return Response::json([
            'status' => 'Error',
            'code' => 500,
            'message' => __('Revoke token failed'),
        ]);
    }

}
