<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RombonganBelajar extends Model
{
    use HasFactory;

    protected $table = 'rombongan_belajar'; // Pastikan ini sesuai dengan nama tabel Anda
    protected $fillable = [
        'id',
        'kode',
        'thn_masuk',
        'dosen_pa', // Foreign key ke tabel dosen
    ];

    public $timestamps = false; // Menonaktifkan pengelolaan timestamp secara otomatis

    // Definisikan relasi ke model Dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_pa');
    }
}
