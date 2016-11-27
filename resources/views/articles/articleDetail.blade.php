@extends('layouts.app')

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"> 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            {{-- entry_inner --}}
            <div class="panel panel-default entry_inner">
                
                {{-- entry_header --}}
                <header class="panel-heading">
                    
                    <h1 class="entry_title overflow-wrap">{{ $article->title }}</h1>
                
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
            
            {{-- comment --}}
            <div class="comments_list">
                
                <h4 class="white_p">Comment List</h4>
                
                {{-- addCommentArea --}}
                <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#addCommentModal">Comment</button>
                    <div class="modal fade" id="addCommentModal" tabindex="-1" role="dialog" aria-labelledby="addCommentModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="addCommentModalLabel">Add Comment</h4>
                                </div>
                            
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ action('ArticleController@commentStore') }}">
                                        {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label for="comment" class="col-md-4 control-label">Comment</label>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="comment" cols="50" rows="10" id="comment"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input id="article_id" name="article_id" type="hidden" value="{{ $article->id }}">
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1">
                                                <input type="submit" class="btn btn-primary form-control" value="Save">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end addCommentArea --}}
                
                <div class="comment">
                    <ul class="list-group">
                        @foreach($comments as $comment)
                        <li class="list-group-item">
                            <p class="comment_body overflow-wrap">{!! nl2br(e($comment->comment)) !!}</p>
                            <ul class="list-inline">
                                <li>投稿日：</li>
                                <li>{{ $comment->created_at }}</li>
                            </ul>
                            
                            @if((Auth::user()->id == $article->user_id) || (Auth::user()->id == $comment->user_id))
                            <ul class="list-inline">
                                <li>
                                    <form action="{{ action('ArticleController@commentDestroy', $comment->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </li>
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- end comment --}}
        </div>
    </div>
</div>

@endsection