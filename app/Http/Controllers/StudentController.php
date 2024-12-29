<?php

namespace App\Http\Controllers;

use App\models\student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $student = Student::with(['class.Teacher', 'extracurriculars'])->get(); 
        $student = Student::with('class')
                    ->where('nama', 'LIKE','%' .$keyword. '%')
                    ->orWhere('gender', $keyword)
                    ->orWhere('nis', 'LIKE', '%' .$keyword. '%')
                    ->orWhereHas('class', function($query) use($keyword) {
                        $query->where('class' ,'LIKE', '%' .$keyword. '%');
                    })
                    ->paginate(5); 
        // $student = Student::with('extracurriculars')->get(); 
        return view ('student', ['studentlist' => $student]);
    }
    public function show($id){
        $student = Student::with(['class.Teacher','extracurriculars'])->findOrFail($id);
        return view ('student-detail', ['student' => $student]);    
    }
    public function create()
    {
        $class = ClassRoom::select('id', 'class')->get();
        return view ('student-add', ['class' => $class]);
    }
    public function store(StudentCreateRequest $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student -> save();

        // $validated = $request-> validate ([
        //     'nis' => 'unique:students|max:10|required',
        //     'nama' => 'max:50|required',
        //     'gender' => 'required',
        //     'class_id' => 'required'
        // ]);

        $student = Student::create($request->all());

        if($student){
            Session::flash('status', 'success');
            Session::flash('messages', 'Add New Student Success');
        }

        return redirect('/student');
    }
    public function edit(Request $request, $id)
    {
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->get('id', 'class => class');
        
        return view('student-edit', ['student' => $student, 'class' => $class]);
    }
    public function update(Request $request, $id)
    {
        $updatedstudent = Student::findOrFail($id);

        $updatedstudent->update($request->all());
        if($updatedstudent){
            Session::flash('status', 'success');
            Session::flash('messages', 'Updated Data Success');
        }
        return redirect('/student');
    }
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }
    public function destroy($id)
    {
        $deletedstudent = Student::findOrFail($id);
        $deletedstudent -> delete(); //menggunakan eloquent

        // $deletedstudent = DB::table('students')->where('id', $id)->delete(); //menggunakan query builder

        if($deletedstudent){
            Session::flash('status', 'success');
            Session::flash('messages', 'Deleted Data Success');
        }

        return redirect('/student');
    }
    public function deletedStudent()
    {
        $deletedstudent = Student::onlyTrashed()->get();
        return view('student-deleted-list', ['student' => $deletedstudent]);
    }
    public function restore($id)
    {
        $deletedstudent = Student::withTrashed()->where('id', $id)->restore();
        
        if($deletedstudent){
            Session::flash('status', 'success');
            Session::flash('messages', 'Restore Data Success');
        }
        return redirect('/student');
    }
}