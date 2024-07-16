<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Quote;
use App\Models\Banner;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Standard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $banner = Banner::all();
        $news = News::first();
        $quote = Quote::first();
        $teacher = Teacher::all();
        $std = Standard::all();
        return view('home',compact('banner','news','quote','teacher','std'));
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
        $teacher = Teacher::all();
        $student = Student::all();
        return view('dashboard.students',compact('std','student'));
    }
}
