<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Category;


class MyProjectsController extends Controller
{
    public function getProjects(){
        $prj = new Post;
        $projects = $prj->getMyProjects();
        
        //get cate sub menu
        $cate = New Category;
        $cates = $cate->getCates();
        
        $now = Carbon::now();
        
        return view('pages.my_projects',compact('projects','cates','now'));
    }
}
