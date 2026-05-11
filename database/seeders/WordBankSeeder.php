<?php

namespace Database\Seeders;

use App\Models\WordBank; // Jangan lupa manggil modelnya
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordBankSeeder extends Seeder
{
    public function run(): void
    {
        // Masukin daftar kata lo di sini
        WordBank::create([
            'kata_villager' => 'meja',
            'clue_impostor' => 'berkaki 4'
        ]);

        WordBank::create([
            'kata_villager' => 'kipas angin',
            'clue_impostor' => 'sejuk'
        ]);

        WordBank::create([
            'kata_villager' => 'bermain',
            'clue_impostor' => 'bahagia'
        ]);
    }
}