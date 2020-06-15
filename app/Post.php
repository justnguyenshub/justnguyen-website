<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'po_id';

    public function admin()
    {
        return $this->belongsTo('App\Admin', 'po_author', 'ad_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category', 'po_topic', 'cate_id');
    }
    public function type()
    {
        return $this->belongsTo('App\PostType', 'po_type', 'pt_id');
    }
    public function image()
    {
        return $this->hasOne('App\Image', 'po_id', 'po_id');
    }

    //get 3 posts in blog at HomePage
    public function getLatedPosts()
    {
        return Post::where('po_type', 1)->where('po_status', 2)->orderBy('po_id', 'desc')->limit(3)->get();
    }

    // get blog follow cate
    public function getPostsFollowCate($id)
    {
        return Post::where('po_topic',$cate)->where('po_status', 2)->orderBy('updated_at', 'desc')->get();
    }

    // get detail post
    public function findPostDetail($id)
    {
        return Post::find(1)->where('po_id',$id)->first();
    }

    // get related posts
    public function getRelatedPosts($topic)
    {
        return Post::where('po_type', 1)->where('po_status', 2)->where('po_topic', $topic)->orderBy('po_id', 'desc')->get();
    }

    // get my projects
    public function getMyProjects()
    {
        return Post::where('po_type', 2)->where('po_status',2)->orderBy('po_id', 'desc')->limit(4)->get();
    }

    //get all posts
    public function getAllCensoredPosts()
    {
        return Post::where('po_type', 1)->where('po_status', 2)->orderBy('po_id', 'desc')->get();
    }

    //get post with id
    public function findLatedPost()
    {
        return Post::max('po_id');
    }

    // find bio
    public function findBio()
    {
        return Post::find(1)->where('po_type',3)->first();
    }

    // get posts follow type
    public function getPostsFollowType($id)
    {
        return Post::where('po_type', $id)->orderBy('po_id', 'desc')->get();
    }

    // get censored posts follow type
    public function getCensoredPostsFollowType($id)
    {
        return Post::where('po_status', 2)->where('po_type', $id)->orderBy('po_id', 'desc')->get();
    }
}
