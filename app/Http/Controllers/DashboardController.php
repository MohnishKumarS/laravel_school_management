<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Quote;
use App\Models\Banner;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Standard;
use App\Models\Admission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(){
        $teacher = Teacher::count();
        $std = Standard::count();
        $students = Student::count();
        $admission = Admission::count();
        return view('home',compact('students','teacher','std','admission'));
    }

    public function showAdmission(){
        $admission = Admission::latest()->get();
        return view('dashboard.admission',compact('admission'));
    }

    public function showBanners(){
        $banner = Banner::all();
        return view('dashboard.banners',compact('banner'));
    }

    public function showNews(){
        $news = News::first();
        return view('dashboard.news',compact('news'));
    }
    public function showQuotes(){
        $quote = Quote::first();
        return view('dashboard.quotes',compact('quote'));
    }
    public function showTeachers(){
        $teacher = Teacher::all();
        return view('dashboard.teachers',compact('teacher'));
    }
    public function showStandard(){
        $std = Standard::all();
        $teacher = Teacher::all();
        return view('dashboard.standard',compact('std','teacher'));
    }
    public function showStudents(){
        $std = Standard::all();
        $students = Student::paginate(10);
        return view('dashboard.students',compact('std','students'));
    }
}
