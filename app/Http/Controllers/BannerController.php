<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function add_banner(Request $req){
        $req->validate([
            'image' => 'required|max:2048',
            'time' => 'required|numeric'
        ]);
        $imgfile = $req->file('image');
        $img_name = time() . '.' . $imgfile->extension();
        $path = 'image/banners/';
        // upload a img file
        $imgfile->move($path, $img_name);
        $data = [
            'image' => $img_name,
            'time' => $req['time']
        ];

        Banner::create($data);
        return redirect()->back()->with('status','success')->with('title','Banner added successfully');
       
    }

    // delete banner 
    public function delete_banner($id){
        $data = Banner::findOrFail($id);

        $path = 'image/banners/'.$data->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $data->delete();
        return redirect()->back()->with([
           'status' =>'success',
            'title' => 'Banner deleted successfully'
        ]);
    }
}
