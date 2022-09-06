<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function album(){
        return $this->belongsTo('App\Models\Album','album_id');
    }
    // get image url
//    public function getPhotoAttribute($val){
//        if($val){
//            return asset('storage/app/public/uploads/images/' . $this->image);
//        }
//    }
}
