<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSim extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'pendaftaransim';

    protected $fillable = [
        'nik',
        'nama_pengguna',
        'tanggal_lahir',
        'alamat',
        'golongan_darah',
        'tempat_lahir',
        'masa_berlaku',
        'lokasi',
        'jenis_sim',
        'pekerjaan',
        'tanggal_ujian',
    ];

}