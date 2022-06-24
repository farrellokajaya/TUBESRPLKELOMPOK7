<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerpanjangSim extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'perpanjangsim';

    protected $fillable = [
        'nik',
        'nama_pengguna',
        'alamat',
        'jenis_sim',
        'sim_lama',
    ];
}
