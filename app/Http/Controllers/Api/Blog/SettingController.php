<?php

namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\SettingRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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
            'heading' => $user->setting('blog.heading'),
            'subheading' => $user->setting('blog.subheading'),
            'keywords' => $user->setting('blog.keywords'),
            'category' => $user->setting('blog.category'),
            'language' => $user->setting('blog.language'),
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
            $setting->setSetting($request->user()->id, [
                'blog.heading' => $request->post('heading'),
                'blog.subheading' => $request->post('subheading'),
                'blog.keywords' => $request->post('keywords'),
                'blog.category' => $request->post('category'),
                'blog.language' => $request->post('language'),
            ]);

            return Response::json([
                'status' => 'OK',
                'code' => 200,
                'message' => __('Blog setting successfully updated')
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
