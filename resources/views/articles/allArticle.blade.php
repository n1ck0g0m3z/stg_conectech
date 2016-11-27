@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
            
            {{-- content --}}
                <ul class="list-group">
                @foreach($articles as $article)
                <li class="list-group-item panel-back blog">
                    <div class="panel-trans">
                        <h2 class="overflow-wrap"><a href="{{ action('ArticleController@showDetail', $article->id) }}">{{ $article->title }}</a></h2>
                        <ul class="list-inline">
                                <li>投稿日：</li>
                                <li>{{ $article->created_at }}</li>
                        </ul>
                        <ul class="list-inline">
                                <li>更新日：</li>
                                <li>{{ $article->updated_at }}</li>
                        </ul>
                    </div>
                </li>
                @endforeach
            {{-- END content --}}
        </div>
    </div>
</div>
@endsection