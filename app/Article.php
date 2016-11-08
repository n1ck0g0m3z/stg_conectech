<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'content', 'img', 'thumbnail',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function article_comments()
    {
        return $this->hasMany('App\ArticleComment');
    }
}
