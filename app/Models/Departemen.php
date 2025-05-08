<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan (opsional kalau nama tabel = jamak dari nama model)
    protected $table = 'departemens';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_departemen', 
        'kode',
        'penanggung_jawab'
    ];
}
