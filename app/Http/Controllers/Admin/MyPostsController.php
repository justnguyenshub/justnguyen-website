<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Category;
use App\PostType;

class MyPostsController extends Controller
{
    public function getMyPosts($type_name, $type_id){
        // menu
        $type = new PostType;
        $types = $type->getAllType();
        
        $type = $type->findTypeName($type_id);

        $p = new Post;
        $posts = $p->getPostsFollowType($type_id);

        $now = Carbon::now();

        return view('admin.pages.my_posts', compact('type', 'types', 'posts', 'now'));
    }
}