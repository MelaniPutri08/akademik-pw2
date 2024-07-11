<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'id',
        'nidn',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'prodi_id',
    ];

    public $timestamps = false;
    
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}
