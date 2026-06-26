<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|max:10|unique:dosens,nidn',
            'nama' => 'required|max:50'
        ], [
            'nidn.required' => 'NIDN wajib diisi',
            'nidn.max' => 'NIDN maksimal 10 karakter',
            'nidn.unique' => 'NIDN sudah digunakan',
            'nama.required' => 'Nama dosen wajib diisi',
            'nama.max' => 'Nama dosen maksimal 50 karakter'
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('dosen.index')
            ->with('success', 'Data dosen berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|max:50'
        ], [
            'nama.required' => 'Nama dosen wajib diisi',
            'nama.max' => 'Nama dosen maksimal 50 karakter'
        ]);

        $dosen = Dosen::findOrFail($id);

        $dosen->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('dosen.index')
            ->with('success', 'Data dosen berhasil diubah');
    }

    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')
            ->with('success', 'Data dosen berhasil dihapus');
    }
}