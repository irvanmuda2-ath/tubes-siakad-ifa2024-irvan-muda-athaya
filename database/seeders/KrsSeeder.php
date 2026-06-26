<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Krs;

class KrsSeeder extends Seeder
{
    public function run(): void
    {
        Krs::create([
            'npm' => '2301001',
            'kode_matakuliah' => 'IF001'
        ]);

        Krs::create([
            'npm' => '2301002',
            'kode_matakuliah' => 'IF002'
        ]);
    }
}