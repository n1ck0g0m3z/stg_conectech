<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tweet;

class TweetController extends Controller
{
    public function store(Request $request)
    {
        $tweet = new Tweet ($request->all());

        \Auth::User()->tweets()->save($tweet);
        return redirect('/timeline');
    }
}
