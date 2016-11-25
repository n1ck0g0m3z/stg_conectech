@extends('layouts.app')

<link href="{{{asset('/assets/css/article.css')}}}" rel="stylesheet">

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            {{-- entry_inner --}}
            <div class="panel panel-default entry_inner">
                
                {{-- entry_header --}}
                <header class="panel-heading">
                    
                    <h1 class="entry_title">{{ $article->title }}</h1>
                
                    <div class="date">
                        <div class="entry_date">
                            <ul class="list-inline">
                                <li>投稿日：</li>
                                <li>{{ $article->created_at }}</li>
                            </ul>
                        </div>
                        <div class="up_date">
                            <ul class="list-inline">
                                <li>更新日：</li>
                                <li>{{ $article->updated_at }}</li>
                            </ul>
                        </div>
                    </div>
                
                </header>
                {{-- end entry_header --}}
                        
                {{-- entry_content --}}
                <div class="panel-body overflow-wrap">

                    {!! nl2br(e($article->content)) !!}
                    
                </div>
                {{-- end entry_content --}}
                
            </div>
            {{-- entry_inner --}}
            
            
            {{-- paging --}}
            <div class="text-center">
                <ul class="pagination ">
                    <li><a href="#">PREV</a></li>
                    <li><a href="#">NEXT</a></li>
                </ul>
            </div>
            {{-- end paging --}}
            
            {{-- comment --
            <div class="comments_list">
                
                <h4>Comment List</h4>
                <a href="#comment_create">コメントする</a>
                
                <div class="comment">
                    <ul class="list-group">
                        @foreach($comments as $comment)
                        <li class="list-group-item">
                            <p class="comment_body">{{ $comment->body }}</p>
                            <ul class="list-inline">
                                <li>投稿日：</li>
                                <li>{{ $comment->created_at }}</li>
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <div id="comment_create">
                    <form action="{{ action('ArticleController@commentStore') }}" method="POST">
                    {{ csrf_field() }}
                    
                    <div class="form-group col-xs-12">
                        <label for="body" class"controll-label">Comment</label>
                        
                        <div class="post_content">
                            <textarea id="body" name="body" class="form-controll col-xs-8" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-info" >Post</botton>
                    </div>
                </form>
                </div>
            </div>
            -- end comment --}}
        </div>
    </div>
</div>

@endsection