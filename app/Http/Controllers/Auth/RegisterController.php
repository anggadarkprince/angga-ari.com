<?php

namespace App\Http\Controllers\Auth;

use App\Mail\AccountActivationMail;
use App\User;
use App\Http\Controllers\Controller;
use App\UserActivation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'username' => str_slug($data['name']) . '-' . uniqid(),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        UserActivation::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new AccountActivationMail($user));

        return $user;
    }

    /**
     * Resend email
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resendEmailActivation(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        if (isset($user)) {
            Mail::to($user->email)->send(new AccountActivationMail($user));
            $status = 'We have sent your activation email again.';
            $type = 'success';
        } else {
            $status = 'Your email is not found!';
            $type = 'danger';
        }
        return redirect('/login')->with(['status' => $status, 'type' => $type]);
    }

    /**
     * Activate user account
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activate($token)
    {
        $activation = UserActivation::where('token', $token)->first();
        if (isset($activation)) {
            $user = $activation->user;
            $type = 'success';
            if ($user->status == 'pending') {
                $activation->user->status = 'activated';
                $activation->user->save();
                $status = "Your email is verified. Welcome aboard!";
            } else if ($user->status == 'suspended') {
                $type = 'danger';
                $status = "Your account is suspended.";
            } else {
                $status = "Your email is already verified";
            }
        } else {
            $type = 'warning';
            $status = 'Sorry your email cannot be identified.';
        }

        return redirect('/login')->with(['type' => $type, 'status' => $status]);
    }

    /**
     * Force logout (or keep login and prevent access some feature till user verify the email).
     * @param Request $request
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
    }

    public function redirectTo()
    {
        return route('home');
    }
}
