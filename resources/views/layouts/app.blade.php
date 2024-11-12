<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Import Tailwind -->
    @vite('resources/js/app.js')

    <!-- Menambahkan Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Jika ingin menambahkan font dari Google Fonts, misalnya: -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS sudah terintegrasi -->
</head>

<body class="bg-gray-100 font-sans text-gray-900">

    <!-- Navbar atau Header -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-lg font-bold">Data Pegawai</a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('pegawai.index') }}" class="hover:text-gray-200">Daftar Pegawai</a></li>
                    <li><a href="{{ route('pegawai.create') }}" class="hover:text-gray-200">Tambah Pegawai</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Konten Halaman Utama -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Data Pegawai - All Rights Reserved.
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- Laravel Mix JS -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>