<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    protected $fillable = [
        'tweet', 'img', 'thumbnail',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function comments()
    {
        return $this->morphMany('App\Comment','commentable');
    }
}
