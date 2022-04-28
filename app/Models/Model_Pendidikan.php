<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pelamar',
        'riwayat',
        'tahun'
    ];

    protected $hidden = [];
}
