<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        MataKuliah::create([
            'kode_matakuliah' => 'IF001',
            'nama_matakuliah' => 'Pemrograman Web',
            'sks' => 3
        ]);

        MataKuliah::create([
            'kode_matakuliah' => 'IF002',
            'nama_matakuliah' => 'Basis Data',
            'sks' => 3
        ]);

        MataKuliah::create([
            'kode_matakuliah' => 'IF003',
            'nama_matakuliah' => 'Jaringan Komputer',
            'sks' => 2
        ]);
    }
}