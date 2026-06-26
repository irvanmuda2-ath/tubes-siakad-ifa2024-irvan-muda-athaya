<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|max:10|unique:mahasiswas,npm',
            'nama' => 'required|max:50'
        ], [
            'npm.required' => 'NPM wajib diisi',
            'npm.max' => 'NPM maksimal 10 karakter',
            'npm.unique' => 'NPM sudah digunakan',
            'nama.required' => 'Nama mahasiswa wajib diisi',
            'nama.max' => 'Nama mahasiswa maksimal 50 karakter'
        ]);

        Mahasiswa::create([
            'npm' => $request->npm,
            'nama' => $request->nama
        ]);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|max:50'
        ], [
            'nama.required' => 'Nama mahasiswa wajib diisi',
            'nama.max' => 'Nama mahasiswa maksimal 50 karakter'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diubah');
    }

    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
