<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','permission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function tweets()
    {
        return $this->hasMany('App\Tweet');
    }
    
    public function followers()
    {
        return $this->belongsToMany(
            self::class, 
            'follows',
            'followee_id',
            'follower_id'
        );
    }
    
    public function followees()
    {
        return $this->belongsToMany(
            self::class,
            'follows',
            'follower_id',
            'followee_id'
        );
    }
    
    public function from_user()
    {
        return $this->belongsToMany(
            self::class,
            'messages',
            'from_id',
            'to_id',
            'message',
            'img',
            'thumbnail'
        );
    }
    
    public function to_user()
    {
        return $this->belongsToMany(
            self::class,
            'messages',
            'to_id',
            'from_id',
            'message',
            'img',
            'thumbnail'
        );
    }
    
    public function isAdminManager()
    {
        if(\Auth::User()->profile->permission == 0){
            return true;
        }
        
        return false;
    }
    
    public function isTeacher()
    {
        if(\Auth::User()->profile->permission == 1){
            return true;
        }
        
        return false;
    }
}
