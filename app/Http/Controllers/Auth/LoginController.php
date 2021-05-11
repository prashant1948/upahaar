<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Product;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(Request $request)
    {
        if($request->session()->has('buyID')){
            $buyID = $request->session()->get('buyID');
            $request->session()->forget('buyID');
            $this->redirectTo = url('/checkoutBuy/' . $buyID);
        }
        return redirect()->back();

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->scopes(['profile','email'])->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return redirect('/')->with('success', 'Logged in successfully');
    }

    public function findOrCreateUser($user)
    {
        $authUser = User::where(['email' => $user->getEmail()])->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->offsetGet('given_name').' '.$user->offsetGet('family_name'),
            'email'    => $user->email,
            'password'    => 'google1234',
            'google_id' => $user->id

        ]);


    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $userFB = Socialite::driver('facebook')->stateless()->user();
        $authUserFB = $this->findOrCreateUserFacebook($userFB);
        Auth::login($authUserFB, true);
        return redirect('/')->with('success', 'Logged in successfully');
    }
    public function findOrCreateUserFacebook($userFB)
    {
        $authUserFB = User::where(['email' => $userFB->getEmail()])->first();
        if ($authUserFB) {
            return $authUserFB;
        }
        return User::create([

            'name'     => $userFB->offsetGet('name'),
            'email'    => $userFB->email,
            'password'    => 'facebook1234',
            'facebook_id' => $userFB->id,
        ]);



    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
