<?php

namespace App\Http\Controllers\Socialite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();
    
        // Verifico si el usuario ya existe
        $user = User::where('email', $googleUser->email)->first();
    
        if ($user) {
            // Si el usuario ya existe, autentico
            Auth::login($user);
        } else {
            // El usuario no existe, crearlo
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'provider_id' => $googleUser->id,
                'provider_name' => 'google',
                'provider_token' => $googleUser->token,
                'provider_refresh_token' => $googleUser->refreshToken,
            ]);
    
            // Autentico al nuevo usuario
            Auth::login($user);
        }
    
        return redirect('/dashboard');
    }
    


}
