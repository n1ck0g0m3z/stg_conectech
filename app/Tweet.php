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
    
    public function tweet_comments()
    {
        return $this->hasMany('App\TweetComment');
    }
}
