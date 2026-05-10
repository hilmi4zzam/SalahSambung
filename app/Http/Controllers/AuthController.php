<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Akses ke brankas User
use Illuminate\Support\Facades\Hash; // Alat buat enkripsi/ngacak password
use Illuminate\Support\Facades\Auth; // Alat buat sistem Login & Logout

class AuthController extends Controller
{
    // ==========================================
    // 1. FITUR REGISTER (Daftar Akun)
    // ==========================================
    public function register(Request $request)
    {
        // Interogasi data (Validasi)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        // Simpan ke brankas MySQL
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), //password di hash
        ]);

        // Langsung auto-login biar user gak repot
        Auth::login($user);

        // Arahin ke halaman dalem game (misal: /dashboard)
        return redirect('/dashboard'); 
    }

    // ==========================================
    // 2. FITUR LOGIN (Masuk Game)
    // ==========================================
    public function login(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Cocokin KTP sama database
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Kalau password bener, kasih izin masuk
            $request->session()->regenerate(); 
            return redirect()->intended('/dashboard'); 
        }

        // Kalau password/email salah, tendang balik ke form bawa pesan error
        return back()->withErrors([
            'email' => 'Email atau Password yang kamu massukkan salah',
        ])->onlyInput('email');
    }

    // Fungsi buat lempar user ke halaman milih akun Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Fungsi buat nangkep datanya (Kosongin dulu aja, kita fokus nampilin UI Google-nya dulu)
    public function handleGoogleCallback()
    {
        // Nanti logic ngecek database dan auto-login taruh sini
        return "Berhasil balik dari Google!"; 
    }

    // ==========================================
    // 3. FITUR LOGOUT (Keluar Game)
    // ==========================================
    public function logout(Request $request)
    {
        Auth::logout(); // Cabut aksesnya
        
        // Bersihin jejaknya (Session)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Balikin ke halaman depan
        return redirect('/masuk');
    }
}