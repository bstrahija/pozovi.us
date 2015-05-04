<?php namespace App\Http\Controllers;

use Auth, Config, Hash, Socialize;
use App\Users\UserRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display login screen
     *
     * @return \View
     */
	public function login()
    {
        return view('auth.login');
    }

    /**
     * Log out of application
     *
     * @return \Redirect
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    /**
     * Redirect to social provider authentication
     *
     * @param  string $provider
     * @return \Redirect
     */
    public function redirectToProvider($provider)
    {
        return Socialize::with($provider)->redirect();
    }

    /**
     * Handle the social auth callback
     *
     * @param  string $provider
     * @return \Redirect
     */
    public function handleProviderCallback($provider, UserRepository $user)
    {
        $socialUser = Socialize::with($provider)->user();

        // Create/update user and login
        $user = $user->createOrUpdateFromSocial($socialUser);
        Auth::loginUsingId($user->id);

        return redirect()->route('home');
    }
}
