<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;
use App\Post;

class CategoriesController extends Controller
{
    public function getPosts($cate_name) {
        $c = new Category;
        //find cate_id
        $cate_id = $c->findCateId($cate_name);
        //get cate sub menu
        $cates = $c->getCates();
        
        $p = new Post;
        $posts = $p->getPostsFollowCate($cate_id->cate_id);
        $now = Carbon::now();
        return view('pages.blog',compact('cates','cate_name','posts','now'));
    }
}
