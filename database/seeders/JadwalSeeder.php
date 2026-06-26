<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        Jadwal::create([
            'kode_matakuliah' => 'IF001',
            'nidn' => '1111111111',
            'kelas' => 'A',
            'hari' => 'Senin',
            'jam' => '08:00:00'
        ]);

        Jadwal::create([
            'kode_matakuliah' => 'IF002',
            'nidn' => '2222222222',
            'kelas' => 'B',
            'hari' => 'Selasa',
            'jam' => '10:00:00'
        ]);
    }
}