<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data pegawai menggunakan model
        Pegawai::create([
            'nama' => 'John Doe',
            'jabatan' => 'Manager',
            'email' => 'johndoe@example.com',
            'tanggal_lahir' => '1985-05-15',
        ]);

        Pegawai::create([
            'nama' => 'Jane Smith',
            'jabatan' => 'Staff',
            'email' => 'janesmith@example.com',
            'tanggal_lahir' => '1990-11-20',
        ]);

        Pegawai::create([
            'nama' => 'Michael Johnson',
            'jabatan' => 'Director',
            'email' => 'michaeljohnson@example.com',
            'tanggal_lahir' => '1982-02-25',
        ]);

        Pegawai::create([
            'nama' => 'Emily Davis',
            'jabatan' => 'HR',
            'email' => 'emilydavis@example.com',
            'tanggal_lahir' => '1993-08-30',
        ]);
    }
}
