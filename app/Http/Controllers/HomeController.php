<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Article;
use App\Tweet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        return view('home',compact('user'));
    }
    
    public function timeline()
    {   
        $profile = \Auth::user()->profile;
        
        $tweets = Tweet::all();
        
        $articles = Article::orderBy('updated_at','desc')->paginate(5);
        
        return view('timeline',compact('profile','articles','tweets'));
    }
}
