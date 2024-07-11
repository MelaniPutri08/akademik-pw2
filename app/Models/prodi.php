<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi'; // Pastikan ini sesuai dengan nama tabel Anda

    protected $fillable = [
        'id',
        'kode',
        'nama',
    ];

    public $timestamps = false; // Menonaktifkan pengelolaan timestamp secara otomatis
}
