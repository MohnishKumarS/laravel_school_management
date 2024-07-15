<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use App\Http\Requests\AdmissionFormRequest;

class AdmissionController extends Controller
{
    public function add_admission(AdmissionFormRequest $req){
        //  $req->validated();

        // save data to database
        Admission::create($req->validated());

        return redirect()->back()->with([
           'status' =>'success',
            'title' => 'Admission form submitted successfully'
        ]);
    }
}
