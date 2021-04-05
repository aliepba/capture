<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];

    public function locations(){
        return  $this->hasMany(Album::class, 'locations_id');
    }

    // public function locationGallery(){
    //     return $this->belongsTo('App\Album');
    // }
}
