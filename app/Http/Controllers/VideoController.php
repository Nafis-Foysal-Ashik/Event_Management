<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video; // Import the Video model

class VideoController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function category(){
        return view('category');
    }

    function fetch()
    {
      $data=video::all()->toArray();
      return view('videos',compact('data'));
    }

    public function store(Request $request)

    {
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);
 
        $file=$request->file('video');
        $file->move('upload',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();
 
        $insert=new video();
        $insert->video = $file_name;
        $insert->save();
 
        return redirect('/show_video')->with('success', 'Video uploaded successfully.');


}
}
