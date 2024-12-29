<?php

namespace App\Models;

use App\Models\Hasil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinalProject extends Model
{
    use HasFactory;

    protected $table = 'formstudents';

    protected $fillable = [
        'nama',
        'ttl',
        'asal_sekolah',
        'alamat',
        'image',
        'no_pendaftaran',
        'hasil_peserta',
    ];
    public function result()
    {
        return $this->belongsTo(Hasil::class, 'hasil_peserta', 'id');
    }
}