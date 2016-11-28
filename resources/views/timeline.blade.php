@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="container">

      <div class="rows">
        <div class="col-md-3 col-sm-4 col-xs-12 panel-back">
          <div class="col-xs-1"></div>
          <div class="col-xs-10">
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
        </div>

        <div class="col-md-6 col-sm-8 col-xs-12 panel-back">
          <div class="post_list panel-trans post_form" style="padding-bottom:0;">
            <div class="container noleft noright">
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 noleft noright">
                  <img class="col-xs-12 col-sm-10 col-md-10 col-lg-9 img-responsive noright" src="data:image/jpeg;base64,{{ base64_encode($profile['img']) }}">
                  <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 noright noleft text-center resp">ゴメス クリス</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 noleft noright">
                  <img class="col-xs-12 col-sm-10 col-md-10 col-lg-9 img-responsive noright" src="data:image/jpeg;base64,{{ base64_encode($profile['img']) }}">
                  <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 noright noleft text-center resp">ゴメス クリス</p>
                </div>
            </div>
            <p class="text-right">もっと見る</p>
          </div><!--  -->
          <br>
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
                  <img class="col-xs-4 img-responsive" src="data:image/jpeg;base64,{{ base64_encode($profile['img']) }}">
                  <div class="col-xs-8 noleft">
                    <p>NAME: ゴメス　クリス</p>
                    <p>Hola a todos</p>
                  </div>
                </div>
              </li>
              </ul>
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