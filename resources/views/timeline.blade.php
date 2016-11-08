@extends('layouts.app')

<!-- Main Content -->
@section('content')

<link rel="stylesheet" type="text/css" href="css/mycss.css">
    <div class="container">

      <div class="rows">

        <div class="col-md-3 col-sm-4 col-xs-12">
          <div>
            <ul class="list-group list-unstyled text-center">
              <li class="list-group-item"><img class="center-block img-responsive" src="{{URL::asset('/img/gomez.png')}}"></li>
              <li class="list-group-item">名前: ゴメス　クリス</li>
              <li class="list-group-item">フォロー：15</li>
              <li class="list-group-item">フォロワー：10</li>
            </ul>
          </div><!--  -->
        </div>

        <div class="col-md-6 col-sm-8 col-xs-12">
        <div>
          <div class="post_form">
            <form>
              投稿欄
              <input type="text"></input>
              <input type="submit"></input>
            </form>
          </div><!-- .post_form -->
          <br>
          <div class="post_list">
            <ul class="list-group list-unstyled">
              <li class="list-group-item">
                <div class="row">
                  <img class="col-xs-2 img-responsive" src="{{URL::asset('/img/gomez.png')}}">
                  <div class="col-xs-10">
                    <p>NAME: ゴメス　クリス</p>
                    <p>Hola a todos</p>
                  </div>
                </div>
              </li>
            <br>
            <p class="text-right">もっと見る</p>
          </div><!--  -->
        </div><!--  -->
        </div>

        <div class="col-md-3 col-xs-12">
        <div>
          <h2>掲示板</h2>
          <ul class="list-group list-unstyled">
            <li class="list-group-item">こんにちは</li>
          </ul>
          <p class="text-right">もっと見る</p>
        </div><!--  -->

        <div>
          <h2>通知欄</h2>
          <ul class="list-group list-unstyled">
            <li class="list-group-item">ゴメスは新規ユーザーです。</li>
          </ul>
          <p class="text-right">もっと見る</p>
        </div><!--  -->
        </div>

      </div> <!-- .rows -->

    </div> <!-- .container -->
@endsection