<?php

namespace App\Http\Controllers\Api\Vault;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vault\SettingRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class SettingController extends Controller
{
    /**
     * Show the profile showcase preference.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $user = $request->user();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => [
                'master_password' => $user->setting('vault.master_password'),
                'secret_key' => $user->setting('vault.secret_key', config('app.key')),
                'cipher' => $user->setting('vault.cipher', config('app.cipher')),
                'entropy' => $user->setting('vault.entropy', 'strong'),
                'reveal_method' => $user->setting('vault.reveal_method', 'plain-text'),
            ]
        ]);
    }

    /**
     * Update blog setting.
     *
     * @param SettingRequest $request
     * @param Setting $setting
     * @return JsonResponse
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        try {
            $data = [
                'vault.secret_key' => $request->post('secret_key'),
                'vault.cipher' => $request->post('cipher'),
                'vault.entropy' => $request->post('entropy'),
                'vault.reveal_method' => $request->post('reveal_method'),
            ];

            $masterPassword = $request->post('master_password');
            if (!empty($masterPassword)) {
                $data['vault.master_password'] = Hash::make($masterPassword);
            }

            $setting->setSetting($request->user()->id, $data);

            return Response::json([
                'status' => 'OK',
                'code' => 200,
                'message' => __('Vault setting successfully updated')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Error',
                'code' => 500,
                'message' => $e->getMessage()
            ]);
        }
    }
}
