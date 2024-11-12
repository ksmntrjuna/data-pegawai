@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Tambah Data Pegawai</h1>

    <form action="{{ route('pegawai.store') }}" method="POST" class="w-full max-w-md">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nama:</label>
            <input type="text" name="nama" class="border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Jabatan:</label>
            <input type="text" name="jabatan" class="border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email:</label>
            <input type="email" name="email" class="border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" class="border rounded p-2 w-full" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Simpan</button>
    </form>
</div>
@endsection
