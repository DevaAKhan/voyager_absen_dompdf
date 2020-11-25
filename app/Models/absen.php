<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    protected $table = "absensikelas";
 
    protected $fillable = ['tanggal','jumlahSiswaHadir','jumlahKetidakhadiran','namaSiswaTidakHadir','buktiKBM'];
}
