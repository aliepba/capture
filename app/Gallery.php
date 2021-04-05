<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    //protected $table = 'galleries';

    protected $fillable = [
        'albums_id', 'image','most'
    ];

    protected $hidden = [];

    public function albums(){
        return $this->belongsTo(Album::class,  'albums_id', 'id');
    }
}
