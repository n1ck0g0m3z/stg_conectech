<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'user_id', 'permission',
        'first_name', 'first_kana', 'middle_name', 'middle_kana', 'last_name', 'last_kana', 
        'major', 'sex', 'born_place', 'birth',
        'hobby', 'about_me', 'technic', 'specialty',
        'img', 'thumbnail',
    ];
    
    protected $dates = ['birth'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function permission()
    {
        return $this->belongsTo('App\Permission');
    }
}
