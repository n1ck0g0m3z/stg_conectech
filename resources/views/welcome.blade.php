@extends('layouts.app')

@section('content')  

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading white_p">ようこそConecTECHへ！</div>

                <div class="panel-body text-center">
                 
                   <img class="center-block img-responsive" src="{{URL::asset('/img/tech.png')}}" alt="profile Pic" height="300" width="600">
                   <p>
                     ConecTECH Page.
                  </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
