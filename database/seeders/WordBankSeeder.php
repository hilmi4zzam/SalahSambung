<?php

namespace Database\Seeders;

use App\Models\WordBank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class WordBankSeeder extends Seeder
{
    public function run(): void
    {
        // Path file JSON
        $jsonPath = database_path('data/words.json');
        
        // Baca file JSON dan jadikan array
        $json = File::get($jsonPath);
        $words = json_decode($json, true);

        $now = Carbon::now();

        // Tambahin timestamp buat format Laravel
        $dataToInsert = array_map(function($item) use ($now) {
            return [
                'kata_villager' => $item['kata_villager'],
                'clue_impostor' => $item['clue_impostor'],
                'created_at'  => $now,
                'updated_at'  => $now,
            ];
        }, $words);

        // Bulk insert per 100 data
        $chunks = array_chunk($dataToInsert, 100);
        foreach ($chunks as $chunk) {
            WordBank::insert($chunk);
        }
        
        $this->command->info('WordBank berhasil di-seed dari file JSON, Bos!');
    }
}