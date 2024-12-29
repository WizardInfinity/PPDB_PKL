<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {

        // $class = ClassRoom::all(); //lazy loading
        // $class = ClassRoom::with('students', 'Teacher')->get(); //eager loading 
        $class = ClassRoom::get();
        return view ('classroom', ['classlist' => $class]);
    }
    public function show($id)
    {
        $class = ClassRoom::with(['students','Teacher'])->findOrFail($id);
        return view ('class-detail', ['class' => $class]);
    }
    
}
