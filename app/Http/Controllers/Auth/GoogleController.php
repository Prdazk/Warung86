<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminLoginNotification;

class GoogleController extends Controller
{
    // Redirect ke Google untuk login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Callback dari Google setelah login
    public function handleGoogleCallback()
    {
        // Ambil data pengguna dari Google
        $googleUser = Socialite::driver('google')->user();

        // Cek apakah user sudah ada di database berdasarkan Google ID
        $user = User::firstOrCreate([
            'google_id' => $googleUser->getId(),
        ], [
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'avatar' => $googleUser->getAvatar(),
        ]);

        // Login pengguna ke aplikasi
        Auth::login($user);

        // Kirim email notifikasi ke admin
        Mail::to('laduniprada4@gmail.com')->send(new AdminLoginNotification($user));

        // Redirect ke halaman beranda setelah login
        return redirect()->route('admin.beranda');
    }
}

