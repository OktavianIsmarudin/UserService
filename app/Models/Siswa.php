<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function pendaftarans() {
        return $this->hasMany(Pendaftaran::class);
    }

    // app/Models/Siswa.php
protected $fillable = ['nama', 'email'];

    use HasFactory;
}
