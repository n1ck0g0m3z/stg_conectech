<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Support\Facades\Redirect;

use App\User;

use URL;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function index()
    {
        
    }


    public function store(Request $request)
    {
        $article = new Article($request->all());
        \Auth::User()->articles()->save($article);
        return Redirect::to(URL::to('/article/' . \Auth::User()->id));
    }


    public function showList($id)
    {
        $user = User::find($id);
        $articles = $user->articles()->orderBy('created_at', 'desc')->get();
        //dd($user);
        return view('articles.articlesList', [
            "user" => $user,
            "articles"  => $articles,
        ]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        
        return Redirect::to(URL::to('/article/' . \Auth::User()->id));
    }


    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        
        return Redirect::to(URL::to('/article/' . \Auth::User()->id));
    }
    
    
    public function showDetail($id)
    {
        $article = Article::findOrFail($id);
        $user_id = $article->user_id;
        $user = User::findOrFail($user_id);
        return view('articles.articleDetail', [
            "user" => $user,
            "article"  => $article,
        ]);
    }
    
    /*public function commentStore(Request $request, $id)
    {
        $article_comments = new ArticleComment($request->all());
        \Auth::User()->articles()->article_comments()->save($article_comments);
        return Redirect::to(URL::to('/article/detail/' . $id));
    }*/
}
