<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{
    // add student
    public function add_student(StudentFormRequest $req){

        // return $req->validated();
        if(Student::create($req->validated())){
            return redirect()->back()->with([
                'status' => 'success',
                'title' => 'Student created successfully'
            ]);
        }else{
            return redirect()->back()->with([
                'status' => 'error',
                'title' => 'Something went wrong while creating student'
            ]);
        }
    }

    // delete student
    public function delete_student($id){
        $data = Student::findOrFail($id);

       if ($data->delete()) {
        return redirect()->back()->with([
            'status' => 'success',
            'title' => 'Student deleted successfully'
        ]);
       }else{
        return redirect()->back()->with([
            'status' => 'error',
            'title' => 'Something went wrong while deleting student'
        ]);
       }
    }
}
