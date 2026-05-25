<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\WordBank;
use App\Models\GameHistory;

Route::get('/', function () {
    return view('landing');
})->name('landing');

// Guest & Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/daftar', function () {
        return view('auth.register');
    });

    Route::get('/masuk', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

    Route::post('/daftar', [AuthController::class, 'register'])->name('register.submit');
    Route::post('/masuk', [AuthController::class, 'login'])->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (Tanya login dulu)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $histories = GameHistory::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('histories'));
    });

    Route::post('/api/history', function (\Illuminate\Http\Request $request) {
        GameHistory::create([
            'user_id' => auth()->id(),
            'winner_role' => $request->winner_role,
        ]);
        return response()->json(['success' => true]);
    });

    Route::delete('/history/{id}', function ($id) {
        GameHistory::where('user_id', auth()->id())->where('id', $id)->delete();
        return back();
    });

    Route::patch('/profile/update-name', function (\Illuminate\Http\Request $request) {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        
        $user = auth()->user();
        $user->name = $request->name;
        $user->save();
        
        return back()->with('success', 'Nama berhasil diperbarui.');
    })->name('profile.updateName');

    Route::get('/setting', function () {
        return view('setting');
    });

    Route::get('/buka-peran', function (\Illuminate\Http\Request $request) {
        $wordBank = WordBank::inRandomOrder()->first();

        return view('buka-peran', [
            'jumlah_pemain' => $request->query('jumlah_pemain', 3),
            'jumlah_impostor' => $request->query('jumlah_impostor', 1),
            'wordBank' => $wordBank
        ]);
    });

    Route::get('/voting', function (\Illuminate\Http\Request $request) {
        return view('voting', [
            'jumlah_pemain' => $request->query('jumlah_pemain', 3)
        ]);
    });

    Route::get('/main-online', function () {
        return view('main-online');
    });
});
