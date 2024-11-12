<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        // Query untuk filter dan pencarian
        $query = Pegawai::query();

        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('sort_by') && in_array($request->sort_by, ['nama', 'jabatan', 'tanggal_lahir'])) {
            $query->orderBy($request->sort_by, $request->sort_direction ?? 'asc');
        }

        // Ambil data pegawai dan lakukan paginasi
        $pegawais = $query->paginate(10);

        // Passing data pegawais ke view
        return view('pegawai.index', compact('pegawais'));

    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawais',
            'tanggal_lahir' => 'required|date',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan');
    }

    // Menampilkan form edit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    // Memperbarui data pegawai
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawais,email,' . $id,
            'tanggal_lahir' => 'required|date',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());

        return redirect()->route('pegawai.index');
    }

    // Menghapus pegawai
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index');
    }
}

