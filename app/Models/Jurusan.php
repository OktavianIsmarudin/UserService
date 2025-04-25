<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    public function pendaftarans() {
        return $this->hasMany(Pendaftaran::class);
    }

    // app/Models/Jurusan.php
protected $fillable = ['nama'];

    use HasFactory;
}
