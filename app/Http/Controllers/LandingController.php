<?php

namespace App\Http\Controllers;

use App\LinkedAccountService;
use App\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Show the application landing page.
     *
     * @param LinkedAccountService $accountService
     * @return \Illuminate\Http\Response
     */
    public function index(LinkedAccountService $accountService)
    {
        $defaultProfile = get_app_setting('app.profile');

        $user = User::find($defaultProfile);

        if(empty($user)) {
            abort(400, 'No profile available on landing page');
        }

        $facebook = $accountService->getLinkedAccount('facebook', $user);
        $twitter = $accountService->getLinkedAccount('twitter', $user);
        $google = $accountService->getLinkedAccount('google', $user);

        return view('landing.index', compact('user', 'facebook', 'twitter', 'google'));
    }
}
