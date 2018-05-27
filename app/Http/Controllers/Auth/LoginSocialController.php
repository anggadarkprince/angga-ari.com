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
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('unbindProvider');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @param $provider
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        $driver = Socialite::driver($provider);
        if (request('bind', false)) {
            if (method_exists($driver, 'redirectUrl')) {
                $redirectUrl = route('setting.contact.callback', ['provider' => $provider]) . '?bind=true';
                return $driver->redirectUrl($redirectUrl)->redirect();
            }
        }
        return $driver->redirect();
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
            $driver = Socialite::driver($provider);
            if (request('bind', false) && method_exists($driver, 'redirectUrl')) {
                $redirectUrl = route('setting.contact.callback', ['provider' => $provider]) . '?bind=true';
                $user = $driver->redirectUrl($redirectUrl)->user();
            } else {
                $user = $driver->user();
            }
        } catch (\Exception $e) {
            return redirect(route('login'))->with([
                'type' => 'warning',
                'status' => __('Something wrong login with ' . $provider)
            ]);
        }

        $authUser = $accountService->bindOrCreate($user, $provider);

        if (request('bind', false)) {
            return redirect()->to(route('setting.contact'))->with([
                'status' => 'success',
                'message' => __(':provider successfully bind', ['provider' => ucfirst($provider)])
            ]);
        }

        auth()->login($authUser, true);

        return redirect()->to(route('home'));
    }

    /**
     * Unbind linked contact from user.
     *
     * @param LinkedAccountService $accountService
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unbindProvider(LinkedAccountService $accountService, $provider)
    {
        $accountService->unbind(auth()->user(), $provider);

        return redirect(route('setting.contact'))->with([
            'status' => 'warning',
            'message' => __(':provider successfully unbind', ['provider' => ucfirst($provider)])
        ]);
    }
}
