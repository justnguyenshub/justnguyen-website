<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function index()
    {
        return view('ckeditor');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            // tao ten file có nhiều thông tin
            // $originName = $request->file('upload')->getClientOriginalName();
            // $fileName = pathinfo($originName, PATHINFO_FILENAME);
            // $extension = $request->file('upload')->getClientOriginalExtension();
            // $fileName = $fileName.'_'.time().'.'.$extension;
            
            // lấy tên file gốc
            $fileName = $request->file('upload')->getClientOriginalName();
            $request->file('upload')->move(public_path('post_imgs'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/post_imgs/'.$fileName); 
            $msg = 'Image uploaded successfully'; 

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}