<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Quote;
use App\Models\Banner;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Standard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {
        $banner = Banner::all();
        $news = News::first();
        $quote = Quote::first();
        $teacher = Teacher::all();
        $std = Standard::all();
        return view('index',compact('banner','news','quote','teacher','std'));
    }


    public function about_us(){
        return view('about-us');
    }

    public function admission(){
        return view('admission');
    }

    public function std_details($id){
        $std = Standard::findOrFail($id);
        $students = Student::where('std_id',$std->id)->paginate(10);
        $standard = Standard::all();
        return view('student-details',compact('std','students','standard'));
    }

    public function notice_board(){
        $news = News::first();
        return view('notice-board',compact('news'));
    }
}
