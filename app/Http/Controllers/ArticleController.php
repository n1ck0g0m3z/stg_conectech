<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use App\User;

use App\Article;

use App\Comment;

use App\Profile;

use URL;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles.allArticle', compact('articles'));
    }
    
    public function timeline()
    {
        $profile = \Auth::user()->profile;
        return view('articlesList',compact('profile'));
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
        $profile = User::find($id)->profile;
        $articles = $user->articles()->orderBy('created_at', 'desc')->get();
        //dd($user);
        return view('articles.articlesList', [
            "user" => $user,
            "profile" => $profile,
            "articles"  => $articles,
        ]);
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
        $poster_id = $article->user_id;
        $poster_profile = User::find($poster_id)->profile;
        $comments = Comment::where('commentable_id', $id)->orderBy('created_at', 'desc')->get();
        
        return view('articles.articleDetail', [
            "poster_profile" => $poster_profile,
            "article"  => $article,
            "comments" => $comments,
        ]);
    }
    
    public function commentStore(Request $request)
    {
        $comment = new Comment($request->all());
        $article = Article::findOrFail($request->commentable_id);
        \Auth::User()->comments()->save($comment);
        $article->comments()->save($comment);
        $id = $request->commentable_id;
        
        return Redirect::to(URL::to('/article/detail/' . $id));
    }
    
    public function commentDestroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        
        return Redirect::to(URL::to('/article/detail/' . $comment->article_id));
    }
}
