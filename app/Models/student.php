<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama','gender','nis','class_id'
    ];

    // protected $connection = 'students'; //menghubungkan model dengan tabel database
    // protected $primarykey = 'id';//mengasi tahu apa nama primarykey di tabel tersebut
    // protected $incrementing = true;//false jika tidak menggunakan auto increment
    // protected $timestamps = true;//false jika tidak memiliki column created_at & updated_at

    
    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    public function extracurriculars()
    {   
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurriculer_id');
    }
}
