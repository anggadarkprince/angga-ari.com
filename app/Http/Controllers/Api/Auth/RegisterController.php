<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Register api.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);

        event(new Registered($user = $this->create($request)));

        $token = $user->createToken('authToken')->plainTextToken;

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ],
        ]);
    }

    /**
     * Persist user data into database.
     *
     * @param $request
     * @return mixed
     */
    private function create($request)
    {
        return User::create([
            'name' => $request->input('name'),
            'username' => Str::slug($request->input('name')) . '-' . uniqid(),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    }
}
