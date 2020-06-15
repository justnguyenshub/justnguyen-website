<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $table = 'post_types';
    protected $primaryKey = 'pt_id';
    public $timestamps = false;

    //relationship
    public function posts()
    {
        return $this->hasMany('App\Post', 'po_type', 'pt_id');
    }

    //get all type
    public function getAllType()
    {
        return PostType::all();
    }

    // find type name
    public function findTypeName($id)
    {
        return PostType::find(1)->where('pt_id', $id)->first();
    }

}
