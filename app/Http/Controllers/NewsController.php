<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
      // add news
    
  public  function add_news(Request $req){
    $req->validate([
        'news' => 'required',
    ]);

    if (News::exists()) {
        return redirect()->back()->with([
            'status' => 'error',
            'title' => 'News already created'
        ]);
    }
;
        News::create($req->all());
        return redirect()->back()->with('status','success')->with('title','News created successfully');



}

// update news
public function update_news($id,Request $req){

    $news = News::findOrFail($id);
    $req->validate([
        'news' => 'required',
    ]);

    $data = [
        'news' => $req['news'],
    ];

    $news->update($data);
    return redirect()->back()->with('status','success')->with('title','News updated successfully');
}

// delete news
public function delete_news($id){
    $news = News::findOrFail($id);
    $news->delete();
    return redirect()->back()->with([
        'status' => 'success',
        'title' => 'News deleted successfully'
    ]);
}
}
