<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'jurusan_id',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'no_hp',
        'email',
        'provinsi',
        'kabupaten',
        'kelurahan',
        'kecamatan',
        'alamat',
        'foto',
        'nama_ayah',
        'pekerjaan_ayah',
        'no_hp_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'no_hp_ibu',
        'asal_sekolah',
        'alamat_sekolah'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function image()
    {
        if ($this->foto && file_exists(public_path('image/book/' . $this->foto))) {
            return asset('image/book/' . $this->foto);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('image/book/' . $this->foto))) {
            return unlink(public_path('image/book/' . $this->foto));
        }

    }
}
