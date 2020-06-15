<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;
use App\Admin;
use App\Post;
use App\Image;

class HomeController extends Controller
{
    public function getIndex(){
        //get cate sub menu
        $cate = New Category;
        $cates = $cate->getCates();

        //get 3 posts in blog
        $post = new Post;
        $posts = $post->getLatedPosts();

        //get 9 images in gallery
        $img = new Image;
        $imgs = $img->getGallery();
        $now = Carbon::now();
        
        return view('pages.index',compact('cates','posts', 'imgs','now'));
    }
}
