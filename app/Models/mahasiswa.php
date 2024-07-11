<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Pastikan ini sesuai dengan nama tabel Anda

    protected $fillable = [
        'id',
        'nim',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'ipk',
        'prodi_id',
        'rombel_id',
    ];

    public $timestamps = false; // Menonaktifkan pengelolaan timestamp secara otomatis

    // Relasi dengan model Prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }

    // Relasi dengan model RombonganBelajar
    public function rombonganBelajar()
    {
        return $this->belongsTo(RombonganBelajar::class, 'rombel_id');
    }
}
