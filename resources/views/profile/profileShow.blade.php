@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">プロフィール<a href="{{ url('profile/edit') }}" class="pull-right">
                    @if (\Auth::User()->id == $profile->user->id)
                    <span>編集</span>
                    @endif
                </a></div>

                  <div class="panel-body panel-back">
                    <div class="row">
                        <div class="col-md-4">
                            
                            <img src="data:image/jpeg;base64,{{base64_encode($profile['img'])}}" alt="profile Pic" height="200" width="200">
                        
                        </div>
                      
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>
                                        <ruby>
                                            {{ $profile->last_name }}<rp>(</rp><rt>{{ $profile->last_kana }}</rt><rp>)</rp>
                                            {{ $profile->first_name }}<rp>(</rp><rt>{{ $profile->first_kana}}</rt><rp>)</rp>
                                        </ruby>
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-default">フォロー</button>
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-6"><a href="#">フォロー：15</a></div>
                                <div class="col-md-6"><a href="#">フォロワー：10</a></div>
                            </div>

                        </div>
                      
                        <div class="col-sm-12 table-wrap" style="margin-top:30px;">
                            <table class="table">
                                <tr>
                                    <th>専攻</th>
                                    <td>{{ $profile->major }}</td>
                                </tr>
                                <tr>
                                    <th>出身</th>
                                    <td>{{ $profile->born_place }}</td>
                                </tr>
                                <tr>
                                    <th>誕生日</th>
                                    <td>{{ $profile->birth->format('Y年m月d日') }}</td>
                                </tr>
                                <tr>
                                    <th>自己紹介</th>
                                    <td>{!! str_replace('&lt;br /&gt;', '<br>', e( nl2br($profile->about_me) ,ENT_QUOTES) ) !!}</td>
                                </tr>
                                <tr>
                                    <th>趣味</th>
                                    <td>{!! str_replace('&lt;br /&gt;', '<br>', e( nl2br($profile->hobby) ,ENT_QUOTES) ) !!}</td>
                                </tr>
                                <tr>
                                    <th>技術</th>
                                    <td>{!! str_replace('&lt;br /&gt;', '<br>', e( nl2br($profile->technic) ,ENT_QUOTES) ) !!}</td>
                                </tr>
                                <tr>
                                    <th>得意分野</th>
                                    <td>{!! str_replace('&lt;br /&gt;', '<br>', e( nl2br($profile->specialty) ,ENT_QUOTES) ) !!}</td>
                                </tr>

                            </table>
                        </div><!-- .table-wrap -->
                        
                    </div>
                </div>
            </div> <!-- .panel -->

        </div>
    </div>
</div>
@endsection
