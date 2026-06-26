<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = MataKuliah::all();

        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|max:10|unique:mata_kuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required|max:50',
            'sks' => 'required|integer|min:1|max:6'
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi',
            'kode_matakuliah.max' => 'Kode mata kuliah maksimal 10 karakter',
            'kode_matakuliah.unique' => 'Kode mata kuliah sudah digunakan',

            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi',
            'nama_matakuliah.max' => 'Nama mata kuliah maksimal 50 karakter',

            'sks.required' => 'SKS wajib diisi',
            'sks.integer' => 'SKS harus berupa angka',
            'sks.min' => 'SKS minimal 1',
            'sks.max' => 'SKS maksimal 6'
        ]);

        MataKuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);

        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_matakuliah' => 'required|max:50',
            'sks' => 'required|integer|min:1|max:6'
        ], [
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi',
            'nama_matakuliah.max' => 'Nama mata kuliah maksimal 50 karakter',

            'sks.required' => 'SKS wajib diisi',
            'sks.integer' => 'SKS harus berupa angka',
            'sks.min' => 'SKS minimal 1',
            'sks.max' => 'SKS maksimal 6'
        ]);

        $matakuliah = MataKuliah::findOrFail($id);

        $matakuliah->update([
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil diubah');
    }

    public function destroy(string $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);

        $matakuliah->delete();

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil dihapus');
    }
}