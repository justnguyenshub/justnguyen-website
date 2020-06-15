<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\PostType;

class UpdatePostController extends Controller
{
    public function showUpdateForm($id)
    {
        // menu
        $type = new PostType;
        $types = $type->getAllType();

        
        $cate = new Category;
        $cates = $cate->getCates();

        $po = new Post;
        $post = $po->findPostDetail($id);

        return view('admin.pages.update_post', compact('post', 'types', 'cates'));
    }
    public function handleUpdatePost($id)
    {
        
    }
    public function handleDelPost($id)
    {
        
    }
}
