<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    //
    protected $fillable = [
        'comment','article_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
