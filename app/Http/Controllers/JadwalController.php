<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::with(['dosen', 'mataKuliah'])->get();

        return view('jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        $matakuliahs = MataKuliah::all();

        return view('jadwal.create', compact('dosens', 'matakuliahs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nidn' => 'required',
            'kelas' => 'required|max:10',
            'hari' => 'required|max:20',
            'jam' => 'required'
        ], [
            'kode_matakuliah.required' => 'Mata kuliah wajib dipilih',
            'nidn.required' => 'Dosen wajib dipilih',
            'kelas.required' => 'Kelas wajib diisi',
            'kelas.max' => 'Kelas maksimal 10 karakter',
            'hari.required' => 'Hari wajib diisi',
            'hari.max' => 'Hari maksimal 20 karakter',
            'jam.required' => 'Jam wajib diisi'
        ]);

        Jadwal::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nidn' => $request->nidn,
            'kelas' => $request->kelas,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $dosens = Dosen::all();
        $matakuliahs = MataKuliah::all();

        return view('jadwal.edit', compact(
            'jadwal',
            'dosens',
            'matakuliahs'
        ));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nidn' => 'required',
            'kelas' => 'required|max:10',
            'hari' => 'required|max:20',
            'jam' => 'required'
        ], [
            'kode_matakuliah.required' => 'Mata kuliah wajib dipilih',
            'nidn.required' => 'Dosen wajib dipilih',
            'kelas.required' => 'Kelas wajib diisi',
            'kelas.max' => 'Kelas maksimal 10 karakter',
            'hari.required' => 'Hari wajib diisi',
            'hari.max' => 'Hari maksimal 20 karakter',
            'jam.required' => 'Jam wajib diisi'
        ]);

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nidn' => $request->nidn,
            'kelas' => $request->kelas,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil diubah');
    }

    public function destroy(string $id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->delete();

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil dihapus');
    }
}