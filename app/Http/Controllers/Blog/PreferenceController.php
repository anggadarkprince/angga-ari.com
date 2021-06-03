<?php

namespace App\Http\Controllers\Blog;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PreferenceController extends Controller
{
    /**
     * Show the profile showcase preference.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function basic(Request $request)
    {
        $user = $request->user();

        $data = [
            'heading' => $user->setting('blog.heading'),
            'subheading' => $user->setting('blog.subheading'),
            'keywords' => $user->setting('blog.keywords'),
            'category' => $user->setting('blog.category'),
            'language' => $user->setting('blog.language'),
        ];

        return view('blog.preference.basic', $data);
    }

    /**
     * Update showcase profile data.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'heading' => 'required|string|max:50',
            'subheading' => 'nullable|string|max:100',
            'keywords' => 'required|string|max:200',
            'category' => 'required|string|max:100',
            'language' => 'required|string|max:50',
        ]);

        try {
            $setting = new Setting();
            $setting->setSetting($request->user()->id, [
                'blog.heading' => $request->get('heading'),
                'blog.subheading' => $request->get('subheading'),
                'blog.keywords' => $request->get('keywords'),
                'blog.category' => $request->get('category'),
                'blog.language' => $request->get('language'),
            ]);

            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Blog preference successfully updated')
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with([
                'status' => 'danger',
                'message' => __($e->getMessage())
            ]);
        }
    }
}
