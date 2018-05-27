<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\LinkedAccountService;
use Socialite;

class LoginSocialController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Social Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users from their social account
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @param $provider
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @param LinkedAccountService $accountService
     * @param string $provider
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(LinkedAccountService $accountService, $provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect(route('login'))->with([
                'type' => 'warning',
                'status' => __('Something wrong login with ' . $provider)
            ]);
        }

        $authUser = $accountService->bindOrCreate($user, $provider);

        auth()->login($authUser, true);

        return redirect()->to(route('home'));
    }
}
