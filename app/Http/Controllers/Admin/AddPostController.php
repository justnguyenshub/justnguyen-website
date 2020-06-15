<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPostRequest;
use App\Post;
use App\Category;
use App\PostType;
use App\Image;
use App\Admin;
use Carbon\Carbon;

class AddPostController extends Controller
{
    public function showAddPostForm()
    {
        $cate = new Category;
        $cates = $cate->getCates();

        // menu
        $type = new PostType;
        $types = $type->getAllType();
        return view('admin.pages.add_post', compact('cates','types'));
    }

    public function handleAddPost(AddPostRequest $request)
    {
        // them du lieu vao bang posts
        //tao 1 doi tuong post
        $post = new Post;
        $ad = new Admin;
        
        $name = session('usrname');
        $admin = $ad->findAd($name);

        //set du lieu cho cac truong
        $post->po_type = $request->po_type;
        $post->po_title = $request->po_title;
        // neu la blog thi insert chude va tomtat
        if ($post->po_type == 1) 
        {
            $post->po_topic = $request->po_topic;
            $post->po_summary = $request->po_summ;
        }
        // neu la project thi insert tom tat
        else if ($post->po_type == 2)
        {
            $post->po_summary = $request->po_summ;
        }
        // neu la bio, gallery, video thi k them tomtat va chude
        $post->po_content = $request->po_content;
        $post->po_author = $admin->ad_id;
        $post->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $post->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        
        //luu du lieu 
        $post->save();
        
        // Them du lieu vao bang images
        // lay id post vua them
        $p = $post->findLatedPost();

        // upload avatar
        $fileName = $request->file('po_img')->getClientOriginalName();
        $url = public_path('post_imgs');
        $request->file('po_img')->move(public_path('post_imgs'), $fileName);

        $image = new Image;

        $u = './public/post_imgs/'.$fileName;  // lay duong link anh
        $image->img_path = $u; 
        $image->po_id = $p;

        $image->save();

        // Them vao bang video
            #code ...
            
        return redirect()->route('ad.add-post')->with('msg','Add post successfully!');
    }
}
