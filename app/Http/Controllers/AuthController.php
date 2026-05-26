<?php

namespace App\Http\Controllers; // Alamat lantai si Controller

use App\Models\User; // Manggil si Resepsionis (Model) dari lantai sebelah
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // 1. Fungsi buat daftar akun manual (Tes Kabel Database)
    public function register(Request $request)
    {
        // Validasi: pastiin semua kolom diisi dan email belum pernah kedaftar
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Akun tersebut telah terdaftar, silahkan login',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 huruf atau angka',
        ]);

        // Proses input ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah register
        Auth::login($user);

        // Langsung arahkan ke dashboard
        return redirect('/dashboard');
    }

    // 2. Fungsi buat login manual
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi', 
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    // 3. Fungsi buat logout dan hapus data user
    public function logout(Request $request)
    {
        // Lakukan proses logout
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }

    // 4. Redirect ke Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // 5. Handle Callback dari Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('google_id', $googleUser->id)->orWhere('email', $googleUser->email)->first();

            if ($user) {
                if (!$user->google_id) {
                    $user->update([
                        'google_id' => $googleUser->id
                    ]);
                }
                Auth::login($user);
            } else {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => null
                ]);
                Auth::login($user);
            }

            return redirect()->intended('/dashboard');

        } catch (\Exception $e) {
            return redirect('/masuk')->withErrors(['email' => 'Gagal login menggunakan Google. Silakan coba lagi.']);
        }
    }
}