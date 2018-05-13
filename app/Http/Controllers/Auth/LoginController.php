<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  mixed $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->status != 'activated') {
            auth()->logout();

            throw ValidationException::withMessages([
                $this->username() => [trans('auth.' . $user->status)],
                'resend' => ($user->status == 'pending')
            ]);
        }
        return redirect()->intended($this->redirectPath());
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $credentials['password'] = $request->input('password');

        $username = $this->username();
        if (!filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            $username = 'username';
        }

        $credentials[$username] = $request->input('email');

        return $credentials;
    }

    /**
     * Redirect user after login.
     *
     * @return string
     */
    public function redirectTo()
    {
        return route('home');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect(route('index'));
    }
}
