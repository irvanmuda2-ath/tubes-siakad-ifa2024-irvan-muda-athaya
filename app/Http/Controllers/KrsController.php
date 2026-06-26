<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $krs = Krs::with([
            'mahasiswa',
            'mataKuliah'
        ])->get();

        return view('krs.index', compact('krs'));
    }

    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = MataKuliah::all();

        return view('krs.create', compact(
            'mahasiswas',
            'matakuliahs'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'kode_matakuliah' => 'required'
        ], [
            'npm.required' => 'Mahasiswa wajib dipilih',
            'kode_matakuliah.required' => 'Mata kuliah wajib dipilih'
        ]);

        Krs::create([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah
        ]);

        return redirect()
            ->route('krs.index')
            ->with('success', 'KRS berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $krs = Krs::findOrFail($id);

        $mahasiswas = Mahasiswa::all();
        $matakuliahs = MataKuliah::all();

        return view('krs.edit', compact(
            'krs',
            'mahasiswas',
            'matakuliahs'
        ));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'npm' => 'required',
            'kode_matakuliah' => 'required'
        ], [
            'npm.required' => 'Mahasiswa wajib dipilih',
            'kode_matakuliah.required' => 'Mata kuliah wajib dipilih'
        ]);

        $krs = Krs::findOrFail($id);

        $krs->update([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah
        ]);

        return redirect()
            ->route('krs.index')
            ->with('success', 'KRS berhasil diubah');
    }

    public function destroy(string $id)
    {
        $krs = Krs::findOrFail($id);

        $krs->delete();

        return redirect()
            ->route('krs.index')
            ->with('success', 'KRS berhasil dihapus');
    }
}