<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Pelamar extends Model
{
    use HasFactory;
    protected $table = 'pelamar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        // 'no_telp',
        // 'agama',
        // 'warganegara',
        // 'npwp',
        // 'no_ktp',
        // 'alamat_ktp',
        // 'alamat_tinggal',
        // 'status_marital',
        // 'jenis_kelamin',
        // 'sakit',
        // 'nama_ayah',
        // 'nama_ibu',
        // 'nama_saudara',
        // 'anak_ke',
        // 'nama_pt',
        // 'jabatan',
        // 'masa_kerja',
        // 'gaji_terakhir',
        // 'nama_atasan',
        // 'alamat_pt',
        // 'alasan_berhenti_kerja',

    ];

    protected $hidden = [];

}
