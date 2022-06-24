<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputNilai extends Model
{
    protected $guarded=[];
    protected $table = 'inputnilai';

    protected $fillable = [
        'Nilai_Ujian_Tulis',
        'Nilai_Ujian_Praktek',
    ];
}
