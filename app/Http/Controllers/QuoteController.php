<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    // add quote
    
  public  function add_quote(Request $req){
        $req->validate([
            'quote' => 'required',
        ]);

        $data = [
            'name' => $req['quote'],
            'author' => $req['author'],
        ];
        // Count the number of quotes
        $quote = Quote::count();
        if($quote == '0'){
            Quote::create($data);
            return redirect()->back()->with('status','success')->with('title','Quote created successfully');
        }else{
            return redirect()->back()->with([
                'status' => 'error',
                'title' => 'Quote already created'
            ]);
        }


    }

    // update quote
    public function update_quote($id,Request $req){

        $quote = Quote::findOrFail($id);
        $req->validate([
            'quote' => 'required',
        ]);

        $data = [
            'name' => $req['quote'],
            'author' => $req['author'],
        ];

        $quote->update($data);
        return redirect()->back()->with('status','success')->with('title','Quote updated successfully');
    }

    // delete quote
    public function delete_quote($id){
        $quote = Quote::findOrFail($id);
        $quote->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'title' => 'Quote deleted successfully'
        ]);
    }
}
