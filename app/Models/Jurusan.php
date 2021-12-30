<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'nama_jurusan',
        'jumlah_kapasitas'
    ];

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'jurusan_id');
    }
}
