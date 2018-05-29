<?php

namespace App\Http\Controllers\Showcase;

use App\Setting;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    /**
     * Show the profile showcase preference.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user = Auth::user();

        $data = [
            'contact' => $user->setting('showcase.contact', $user->contact),
            'email' => $user->setting('showcase.email', $user->email),
            'website' => $user->setting('showcase.website', $user->website),
            'tagline' => $user->setting('showcase.tagline'),
            'subtagline' => $user->setting('showcase.subtagline'),
            'identity' => $user->setting('showcase.identity'),
            'profile' => $user->setting('showcase.profile'),
        ];

        return view('showcase.profile', $data);
    }

    /**
     * Update showcase profile data.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:50',
            'contact' => 'required|string|max:50',
            'website' => 'nullable|url|max:50',
            'tagline' => 'required|string|max:50',
            'subtagline' => 'required|string|max:200',
            'identity' => 'required|string|max:1000',
            'profile' => 'required|string|max:1000',
        ]);

        $user = User::find($request->user()->id);

        $setting = new Setting();

        try {
            $setting->setSetting($user->id, [
                'showcase.contact' => $request->get('contact', $user->contact),
                'showcase.email' => $request->get('email', $user->email),
                'showcase.website' => $request->get('website', $user->website),
                'showcase.tagline' => $request->get('tagline'),
                'showcase.subtagline' => $request->get('subtagline'),
                'showcase.identity' => $request->get('identity'),
                'showcase.profile' => $request->get('profile'),
            ]);

            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Showcase profile successfully updated')
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => __($e->getMessage())
            ]);
        }
    }
}
