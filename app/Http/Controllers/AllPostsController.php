<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Category;

class AllPostsController extends Controller
{
    public function getPosts() {
        //get cate sub menu
        $cate = New Category;
        $cates = $cate->getCates();

        $p = new Post;
        $posts = $p->getAllCensoredPosts();

        $now = Carbon::now();

        return view('pages.all_posts',compact('cates', 'posts', 'now'));
    }
}
