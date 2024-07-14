<?php

namespace App\Http\Controllers;

use App\Models\Standard;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    public function add_std(Request $req){
        $req->validate([
            'class' => 'required',
            'std' => 'required',
            'cc' => 'required',
            'year' => 'required',
        ]);

        Standard::create($req->all());
        return redirect()->back()->with([
            'status' => 'success',
            'title' => 'Standard created successfully'
        ]);
    }

    // delete std 
    public function delete_std($id){
        $data = Standard::findOrFail($id);
        if($data->delete()){
            return redirect()->back()->with([
                'status' => 'success',
                'title' => 'Standard deleted successfully'
            ]);
        } else {
            return redirect()->back()->with([
                'status' => 'error',
                'title' => 'Something went wrong'
            ]);
        }
    }
}
