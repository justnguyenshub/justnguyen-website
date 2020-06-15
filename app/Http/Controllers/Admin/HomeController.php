<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PostType;

class HomeController extends Controller
{
    public function getHome(){
        // menu
        $type = new PostType;
        $types = $type->getAllType();
        
        return view('admin.pages.index', compact('types'));
    }
}
