<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'category'
    ];

    protected $hidden = [];

    public function categoriess(){
        return  $this->hasMany(Album::class, 'category_id');
    }

    // public function categoryGallery(){
    //     return $this->belongsTo('App\Album');
    // }
}