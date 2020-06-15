<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BioController extends Controller
{
    public function getBio()
    {
        $bio = new Post;

        $bio = $bio->findBio();
        
        //get cate sub menu
        $cate = New Category;
        $cates = $cate->getCates();

        return view('pages.bio',compact('bio', 'cates'));
    }
}
