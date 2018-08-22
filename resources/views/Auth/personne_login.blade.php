@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PersonneLogin</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('personne.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                            <label for="Email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="Email" class="form-control" name="Email" value="{{ old('Email') }}">

                                @if ($errors->has('Email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Mot_de_passe') ? ' has-error' : '' }}">
                            <label for="Mot_de_passe" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="Mot_de_passe" type="password" class="form-control" name="Mot_de_passe">

                                @if ($errors->has('Mot_de_passe'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Mot_de_passe') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
