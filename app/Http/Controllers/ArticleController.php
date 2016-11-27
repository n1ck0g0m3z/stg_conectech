<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use App\User;

use App\Article;

use App\ArticleComment;

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
        $comments = ArticleComment::where('article_id', $id)->orderBy('created_at', 'desc')->get();
        $user_id = $article->user_id;
        $profile = Profile::findOrFail($user_id);
        return view('articles.articleDetail', [
            "profile" => $profile,
            "article"  => $article,
            "comments" => $comments,
        ]);
    }
    
    public function commentStore(Request $request)
    {
        $comment = new ArticleComment($request->all());
        \Auth::User()->article_comments()->save($comment);
        $id = $request->article_id;
        
        return Redirect::to(URL::to('/article/detail/' . $id));
    }
    
    public function commentDestroy($id)
    {
        $comment = ArticleComment::findOrFail($id);
        $comment->delete();
        
        return Redirect::to(URL::to('/article/detail/' . $comment->article_id));
    }
}
