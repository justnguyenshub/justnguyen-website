<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'img_id';
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo('App\Post', 'po_id', 'po_id');
    }
    
    public function getGallery(){
        return Image::where('po_id', Null)->orderBy('img_id', 'desc')->limit(9)->get();
    }
}
