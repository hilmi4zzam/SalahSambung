<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Data apa aja yang boleh diisi (Mass Assignment)
     * Kalau kolomnya gak ada di sini, data gak bakal masuk ke database!
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
    ];

    /**
     * Data yang disembunyiin kalau kita panggil (buat keamanan)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Settingan otomatis buat tipe data kolom tertentu
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Ini biar password otomatis di-hash
        ];
    }
}