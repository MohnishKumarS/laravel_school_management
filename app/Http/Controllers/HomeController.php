<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Quote;
use App\Models\Banner;
use App\Models\Teacher;
use App\Models\Standard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = Banner::all();
        $news = News::first();
        $quote = Quote::first();
        $teacher = Teacher::all();
        $std = Standard::all();
        return view('index',compact('banner','news','quote','teacher','std'));
    }

    public function dashboard(){
        return view('home');
    }

    public function admission(){
        return view('admission');
    }
}
