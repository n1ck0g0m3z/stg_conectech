<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetComment extends Model
{
    //
    protected $fillable = [
        'comment',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
