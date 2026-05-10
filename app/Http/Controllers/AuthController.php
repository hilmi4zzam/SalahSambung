<?php

namespace App\Http\Controllers; // Alamat lantai si Controller

use App\Models\User; // Manggil si Resepsionis (Model) dari lantai sebelah
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

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
        // Ambil data user yang sedang login saat ini
        $user = Auth::user();

        // Lakukan proses logout
        Auth::logout();
        
        // Hapus data user dari database (MySQL)
        if ($user) {
            $user->delete();
        }
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}