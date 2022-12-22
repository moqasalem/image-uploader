<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class UploadController extends Controller
{
    public function upload(Request $request){

        $validator = Validator::make($request->file(), [
            'file' => 'required|mimes:jpeg,png,bmp,gif,svg|max:5048',
        ]);

        if($validator->fails()){
            $request->session()->flash('upp-sess','no');
            return "Failed to upload your image!";
        }
        else{
            $path = Storage::disk('public')->put('images',$request->file('file'));
            $url = Storage::url($path);
            // $request->file->storeAs('images', 'test.jpg');
            $root = "framework";
            $full_path = $root .''. $url;
            $request->session()->flash('up_sess','yes');
            $request->session()->flash('pic_path',$full_path);
            return view('upload');
        }

        
    }

    public function upload2(Request $req){
        return $req->file;
        //return "file should be here";
    }
}
