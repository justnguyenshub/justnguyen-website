<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Category;

class ProjectDetailController extends Controller
{
    public function getDetail($id) {
        $prj = new Post;
        $detail = $prj->findPostDetail($id);

        //get cate sub menu
        $cate = New Category;
        $cates = $cate->getCates();
        
        $now = Carbon::now();
        
        return view('pages.project_detail',compact('detail','cates', 'now'));
    }
}
