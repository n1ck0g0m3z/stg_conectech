@extends('layouts.app')

@section('content')  

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading white_p">ようこそConecTECHへ！</div>

                <div class="panel-body panel-back">
                    <div class="box_size img-responsive center-block">
                        <p class="head_content">ConecTECHとは？</p>
                        東京デザインテクノロジーセンター専門学校「TECH.C」のSNSです。
                        <br><br>
                        <p class="head_content" style="color:#48B3E9;">TECH.Cとは？</p>
                        TECH.C.にはあなたをIT・デザイン業界の成功へと導く場所です。
                    </div>
                    <br>
                    <img class="center-block img-responsive text-center" src="{{URL::asset('/img/tech.png')}}" alt="profile Pic" height="300" width="600">
                    <br><p class="text-center">
                        Copyright &copy;ConecTECH Page.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
