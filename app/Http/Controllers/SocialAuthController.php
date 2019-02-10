<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class SocialAuthController extends Controller
{
    public function loginFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook()
    {
        $userSocial = Socialite::driver('facebook')->user();
        $email = $userSocial->getEmail();

        if(Auth::check()){
            $user = Auth::user();
            $user->facebook=$email;
            $user->save();
            return redirect()->intended('/home');
        }

        $user = User::where('facebook',$email)->first();

        if (isset($email->name)){
            Auth::login($user);
            return redirect()->intended('/home');
        }

        if (User::where('email',$email)->count()){
            $user = User::where('email',$email)->first();
            $user->facebook=$email;
            $user->save();
            Auth::login($user);
            return redirect()->intended('/home');
        }
        
        
        //Código para cadastrar pelo facebook
        $user = new User;
        $user->name = $userSocial->getName();
        $user->email = $userSocial->getEmail();
        $user->facebook = $userSocial->getEmail();
        $user->avatar = $userSocial->getAvatar();
        //$user->password = bcrypt($userSocial->token);
        $user->password = '';
        $user->save();
        Auth::login($user);
        return redirect()->intended('/home');
    }

    public function logoutFacebook()
    {
        if(Auth::check()){
            $user = Auth::user();
            $user->facebook=NULL;
            $user->save();
            return redirect()->intended('/perfil');
        }
    }

    public function loginGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        $userSocial = Socialite::driver('google')->user();
        $email = $userSocial->getEmail();

        if(Auth::check()){
            $user = Auth::user();
            $user->google=$email;
            $user->save();
            return redirect()->intended('/home');
        }

        $user = User::where('google',$email)->first();

        if (isset($email->name)){
            Auth::login($user);
            return redirect()->intended('/home');
        }

        if (User::where('email',$email)->count()){
            $user = User::where('email',$email)->first();
            $user->google=$email;
            $user->save();
            Auth::login($user);
            return redirect()->intended('/home');
        }
        //Código para cadastrar pelo google
        $user = new User;
        $user->name = $userSocial->getName();
        $user->email = $userSocial->getEmail();
        $user->google = $userSocial->getEmail();
        $user->password = bcrypt($userSocial->token);
        $user->avatar = $userSocial->getAvatar();
        $user->save();
        Auth::login($user);
        return redirect()->intended('/home');
    }

    public function logoutGoogle()
    {
        if(Auth::check()){
            $user = Auth::user();
            $user->google=NULL;
            $user->save();
            return redirect()->intended('/perfil');
        }
    }
}
