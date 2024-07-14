<?php

namespace App\Http\Controllers;

use App\Models\Quote;
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
        $quote = Quote::first();
        $teacher = Teacher::all();
        $std = Standard::all();
        return view('index',compact('quote','teacher','std'));
    }
}
