@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">プロフィール編集</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="first_name" class="col-md-4 control-label">username</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="username" name="username" value="{{ Auth::user()->username }}" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="first_name" class="col-md-4 control-label">email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">first_name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first_name" value="{{ old('first_name') }}">
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">middle_name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="middle_name" value="{{ old('middle_name') }}">
                                @if ($errors->has('middle_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">last_name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last_name" value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="birth" class="col-md-4 control-label">birth</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" id="birth" name="birth" value="{{ old('last_name') }}">
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-push-4">
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="sex0" value="0" checked>
                                    Man
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="sex1" value="1">
                                    Woman
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('major') ? ' has-error' : '' }}">
                            <label for="major" class="col-md-4 control-label">major</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="major" name="major" placeholder="major" value="{{ old('major') }}">
                                @if ($errors->has('major'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('major') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('born_place') ? ' has-error' : '' }}">
                            <label for="born_place" class="col-md-4 control-label">born_place</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="born_place" name="born_place" placeholder="born_place" value="{{ old('born_place') }}">
                                @if ($errors->has('born_place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('born_place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('about_me') ? ' has-error' : '' }}">
                            <label for="about_me" class="col-md-4  control-label">about_me</label>
                            <div class="col-md-6">
                                <textarea class="form-control vresize" id="about_me" name="about_me" placeholder="about_me" value="{{ old('about_me') }}" cols="6" rows="3"></textarea>
                            </div>
                            @if ($errors->has('about_me'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('about_me') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('hobby') ? ' has-error' : '' }}">
                            <label for="hobby" class="col-md-4  control-label">hobby</label>
                            <div class="col-md-6">
                                <textarea class="form-control vresize" id="hobby" name="hobby" placeholder="hobby" value="{{ old('hobby') }}" cols="6" rows="3"></textarea>
                            </div>
                            @if ($errors->has('hobby'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('hobby') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('technic') ? ' has-error' : '' }}">
                            <label for="technic" class="col-md-4  control-label">technic</label>
                            <div class="col-md-6">
                                <textarea class="form-control vresize" id="technic" name="technic" placeholder="technic" value="{{ old('technic') }}" cols="6" rows="3"></textarea>
                            </div>
                            @if ($errors->has('technic'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('technic') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('specialty') ? ' has-error' : '' }}">
                            <label for="specialty" class="col-md-4  control-label">specialty</label>
                            <div class="col-md-6">
                                <textarea class="form-control vresize" id="specialty" name="specialty" placeholder="specialty" value="{{ old('specialty') }}" cols="6" rows="3"></textarea>
                            </div>
                            @if ($errors->has('specialty'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('specialty') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> <!-- .panel -->

        </div>
    </div>
</div>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@endsection
