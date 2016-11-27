@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="container">

      <div class="rows">

        <div class="col-md-3 col-sm-4 col-xs-12 panel-back">
          <div style="margin-top:10px;">
            <ul class="list-group list-unstyled text-center">
              <li class="list-group-item">
                <img class="center-block img-responsive" src="data:image/jpeg;base64,{{ base64_encode($profile['img']) }}"></li>
              <li class="list-group-item">名前: ゴメス　クリス</li>
              <li class="list-group-item">フォロー：15</li>
              <li class="list-group-item">フォロワー：10</li>
            </ul>
          </div><!--  -->
        </div>

        <div class="col-md-6 col-sm-8 col-xs-12 panel-back">
          <div class="panel-trans post_form" style="margin-top:10px;margin-bottom:0px;padding-bottom:5px">
            <form>
              <div class="form-group">
                <label for="post_tweet">投稿欄</label>
                <input type="text" class="form-control" name="post_tweet"></input>
                <input class="btn btn-primary form-control" type="submit" value="Post"></input>
              </div>
            </form>
          </div><!-- .post_form -->
          <br>
          <div class="post_list panel-trans post_form" style="padding-bottom:0;">
            <ul class="list-group list-unstyled">
              <li class="list-group-item">
                <div class="row">
                  <img class="col-xs-2 img-responsive" src="data:image/jpeg;base64,{{ base64_encode($profile['img']) }}">
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

        <div class="col-md-3 col-xs-12 panel-back">
        <div class="panel-trans" style="padding-bottom:0;margin-top:10px">
          <h2>ブログ</h2>
          <ul class="list-group list-unstyled">
            <li class="list-group-item">こんにちは</li>
          </ul>
          <p class="text-right">もっと見る</p>
        </div><!--  -->

        <div class="panel-trans" style="padding-bottom:0;">
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