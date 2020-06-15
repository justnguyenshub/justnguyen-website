<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;

    //relationship
    public function posts()
    {
        return $this->hasMany('App\Post', 'po_topic', 'cate_id');
    }

    public function getCates(){
        return Category::get();
    }

    //get Cate_name
    public function findCateName($cate_id){
        return Category::find(1)->where('cate_id', $cate_id)->first();
    }
    //get Cate_id
    public function findCateId($cate_name){
        return Category::find(1)->where('cate_name', $cate_name)->first();
    }
}
