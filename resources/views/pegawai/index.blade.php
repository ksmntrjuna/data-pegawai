@extends('layouts.app')

@section('content')

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Data Pegawai</h1>

    <form method="GET" action="{{ route('pegawai.index') }}" class="mb-4">
        <input type="text" name="search" placeholder="Cari nama..." value="{{ request('search') }}" class="border rounded p-2" />
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Cari</button>
    </form>

    <table class="w-full border-collapse">
        <thead>
            <tr>
                <th class="border py-2 px-4">No.</th>
                <th class="border py-2 px-4">Nama</th>
                <th class="border py-2 px-4">Jabatan</th>
                <th class="border py-2 px-4">Email</th>
                <th class="border py-2 px-4">Tanggal Lahir</th>
                <th class="border py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawais as $pegawai)
            <tr>
                <td class="border py-2 px-4">{{ $loop->iteration }}</td> <!-- Penomoran menggunakan $loop->iteration -->
                <td class="border py-2 px-4">{{ $pegawai->nama }}</td>
                <td class="border py-2 px-4">{{ $pegawai->jabatan }}</td>
                <td class="border py-2 px-4">{{ $pegawai->email }}</td>
                <td class="border py-2 px-4">{{ $pegawai->tanggal_lahir }}</td>
                <td class="border py-2 px-4">
                    <!-- Tombol Edit dengan ikon -->
                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="text-blue-500 hover:text-blue-700">
                        <i class="fas fa-edit"></i> <!-- Ikon Edit -->
                    </a>

                    <!-- Tombol Hapus dengan ikon -->
                    <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" class="inline-block ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash-alt"></i> <!-- Ikon Hapus -->
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pegawais->links() }}
</div>
@endsection