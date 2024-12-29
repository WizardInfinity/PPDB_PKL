<?php

namespace App\Models;

use App\Models\FinalProject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hasil extends Model
{
    use HasFactory;

    protected $table = 'hasil';

    protected $fillable = [
        'hasil',
    ];

    public function formstudents()
    {
        return $this->hasMany(FinalProject::class, 'hasil_peserta', 'id');
    }
}
