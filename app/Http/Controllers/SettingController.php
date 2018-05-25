<?php

namespace App\Http\Controllers;

use App\Contracts\Calendar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    /**
     * Show the profile setting.
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        $user = Auth::user();

        return view('setting.profile', compact('user'));
    }

    /**
     * Save user profile.
     *
     * @param  Request $request
     * @return Response
     */
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|max:50',
            'username' => [
                'required', 'max:50', 'regex:/^[a-zA-Z0-9\-\.]+$/u', Rule::unique('users')->ignore(Auth::id()),
            ],
            'email' => [
                'required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::id())
            ],
            'gender' => 'required|in:male,female',
            'birthday_year' => 'required|integer|between:1975,' . date('Y'),
            'birthday_month' => 'required|date_format:m',
            'birthday_date' => 'required|date_format:d',
            'about' => 'max:500',
        ]);

        $year = $request->get('birthday_year');
        $month = $request->get('birthday_month');
        $date = $request->get('birthday_date');
        $birthday = $year . '-' . $month . '-' . $date;
        if (!validate_date($birthday)) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Birthday value is invalid')
            ]);
        }

        $user = User::find($request->user()->id);

        if (!empty($request->get('avatar'))) {
            $avatarImage = Image::make($request->get('avatar_base64'));

            $basePath = 'avatars/' . format_date($user->created_at, 'Ym') . '/' . $user->id;
            $pathOriginal = $basePath . '_original.jpg';
            $pathSmall = $basePath . '_small.jpg';

            $avatarImage->resize(300, 300);
            Storage::disk('public')->put($pathOriginal, $avatarImage->encode('jpg', 80));

            $avatarImage->resize(55, 55);
            Storage::disk('public')->put($pathSmall, $avatarImage->encode('jpg', 80));

            $user->avatar = $pathOriginal;
        }

        $user->birthday = $birthday;
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->birthday = $request->get('birthday');
        $user->gender = $request->get('gender');
        $user->about = $request->get('about');

        if ($user->save()) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Profile successfully updated')
            ]);
        }

        return redirect()->back()->with([
            'status' => 'danger',
            'message' => __('Something went wrong, try again later')
        ]);
    }

    /**
     * Show the contact setting.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        $user = Auth::user();

        return view('setting.contact', compact('user'));
    }

    /**
     * Show the password setting.
     *
     * @return \Illuminate\View\View
     */
    public function password()
    {
        $user = Auth::user();

        return view('setting.password', compact('user'));
    }

    /**
     * Show the notification setting.
     *
     * @return \Illuminate\View\View
     */
    public function notification()
    {
        $user = Auth::user();

        return view('setting.notification', compact('user'));
    }

}
