<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Nama tabel di database, jika berbeda dengan nama model
    protected $table = 'pegawais';

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'nama',
        'jabatan',
        'email',
        'tanggal_lahir',
    ];

    // Jika ingin memformat tanggal secara otomatis
    protected $dates = [
        'tanggal_lahir',
        'created_at',
        'updated_at',
    ];
}
