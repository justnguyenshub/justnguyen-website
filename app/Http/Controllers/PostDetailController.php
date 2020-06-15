<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Category;

class PostDetailController extends Controller
{
    public function getDetail($id, $title) {
        $p = new Post;
        $detail = $p->findPostDetail($id);
        $relates = $p->getRelatedPosts($detail->po_topic);

        //get cate sub menu
        $cate = New Category;
        $cates = $cate->getCates();
        
        $now = Carbon::now();
        
        return view('pages.post_detail',compact('detail', 'relates', 'cates', 'now'));
    }
}
