<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $table = 'siswa';

    protected $fillable = [
        'nama',
        'nis',
        'kelas',
    ];
    public function kelass()
    {
        return $this->belongsTo(Kelas::class, 'kelas', 'id');
    }
}
