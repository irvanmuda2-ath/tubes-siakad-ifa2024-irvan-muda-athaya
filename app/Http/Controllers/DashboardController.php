<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Jadwal;
use App\Models\Krs;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'jumlahDosen' => Dosen::count(),
            'jumlahMahasiswa' => Mahasiswa::count(),
            'jumlahMatakuliah' => MataKuliah::count(),
            'jumlahJadwal' => Jadwal::count(),
            'jumlahKrs' => Krs::count(),
        ]);
    }
}