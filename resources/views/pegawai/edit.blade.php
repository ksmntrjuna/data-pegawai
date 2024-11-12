@extends('layouts.app')

@section('content')

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Edit Data Pegawai</h1>

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $pegawai->nama) }}" class="border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="jabatan" class="block text-gray-700">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan', $pegawai->jabatan) }}" class="border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $pegawai->email) }}" class="border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="tanggal_lahir" class="block text-gray-700">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}" class="border rounded p-2 w-full" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Update</button>
    </form>
</div>

@endsection