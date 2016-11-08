@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ユーザープロフィール</div>

                  <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                          <img src="{{URL::asset('/img/gomez.png')}}" alt="profile Pic" height="200" width="200">
                        </div>
                      
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2><ruby>ゴメス<rp>(</rp><rt>Gomez</rt><rp>)</rp> クリス<rp>(</rp><rt>Chris</rt><rp>)</rp></ruby></h2>
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
                                    <th>誕生日</th>
                                    <td>2016/07/12</td>
                                </tr>
                                <tr>
                                    <th colspan="2">About Me</th>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                            </table>
                        </div><!-- .table-wrap -->


                    </div>
                </div>
            </div> <!-- .panel -->

        </div>
    </div>
</div>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@endsection
