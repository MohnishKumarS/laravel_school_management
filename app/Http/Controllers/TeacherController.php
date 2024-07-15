<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function add_teacher(Request $req){
        $req->validate([
            'name' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'joined_at' => 'required|date',
        ]);

      $tea =  Teacher::create($req->all());
      if($tea){
           // Setting flash data
           session()->flash([
            'status' => 'success',
            'title' => 'Teacher added successfully'
        ]);
           return redirect()->back();
      }else{
           // Setting flash data
           session()->flash('status', 'error');
           session()->flash('title', 'something went error');
           return redirect()->back();
      }
     
    }


    // delete teacher
    public function delete_teacher($id){
        $data = Teacher::findOrFail($id);

       if ($data->delete()) {
        return redirect()->back()->with([
            'status' => 'success',
            'title' => 'Teacher deleted successfully'
        ]);
    } else {
        return redirect()->back()->with([
            'status' => 'error',
            'title' => 'Something went wrong'
        ]);
    }
    }
}
