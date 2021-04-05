<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name','slug','location_id', 'category_id', 'description'
    ];

    protected $hidden = [];

    public function galleries(){
        return  $this->hasMany(Gallery::class, 'albums_id', 'id');
    }

      public function categories(){
        return $this->belongsTo(Category::class,  'category_id', 'id');
    }

    public function locations(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
}
