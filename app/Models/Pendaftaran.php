<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public function siswa() {
        return $this->belongsTo(Siswa::class);
    }

    public function jurusan() {
        return $this->belongsTo(Jurusan::class);
    }

    // app/Models/Pendaftaran.php
protected $fillable = ['siswa_id', 'jurusan_id', 'tanggal_daftar'];

    use HasFactory;
}
