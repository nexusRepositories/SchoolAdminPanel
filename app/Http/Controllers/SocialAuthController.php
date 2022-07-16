<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class SocialAuthController extends Controller
{
    // GOOGLE AUTH

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();
    
            if ($user) {
                Auth::login($user);
                return redirect('/');
            }

            Validator::make($googleUser->user, [
                'email' => [Rule::unique('users', 'email')],
            ], [], [
                'email' => 'EMAIL',
            ])->validate();

            
            $newUser = User::create([
                'first_name' => $googleUser->user['given_name'],
                'last_name' => $googleUser->user['family_name'],
                'email' => $googleUser->user['email'],
                'google_id'=> $googleUser->id,
                'password' => Hash::make(Str::random(10)),
                'email_verified_at' => now()
                ]);
    
            event(new Registered($newUser));
    
            Auth::login($newUser);
    
            return redirect('/');

        } catch(Exception $e) {
            \Log::error($e->getMessage());
        }
    }

    // GITHUB AUTH

    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function loginWithGithub()
    {
        try {
            $githubUser = Socialite::driver('github')->user();
            $user = User::where('github_id', $githubUser->id)->first();
            if ($user) {
                Auth::login($user);
                return redirect('/');
            }
            
            Validator::make($githubUser->user, [
                'email' => [Rule::unique('users', 'email')],
            ], [], [
                'email' => 'EMAIL',
            ])->validate();

            $newUser = User::create([
                'first_name' => $githubUser->user['name'] ? $githubUser->user['name'] : $githubUser->nickname,
                'last_name' => '',
                'email' => $githubUser->user['email'],
                'github_id'=> $githubUser->id,
                'password' => Hash::make(Str::random(10)),
                'email_verified_at' => now()
                ]);
    
            event(new Registered($newUser));
    
            Auth::login($newUser);
    
            return redirect('/');

        } catch (Exception $e) {
            \Log::error($e->getMessage());
        }
    }
}
