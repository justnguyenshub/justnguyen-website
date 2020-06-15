<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'ad_id';
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany('App\Post', 'po_author', 'ad_id');
    }

    //find 1 admin follow name
    public function findAd($name)
    {
        return Admin::find(1)->where('ad_usrname',$name)->first();
    }
}
