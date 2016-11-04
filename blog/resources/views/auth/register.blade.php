@extends('index')
@section('content')
        <div class="container logreg">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                    <div class="col-xs-6">
                                            <a href="login"  id="login-form-link">Login</a>
                                    </div>
                                    <div class="col-xs-6">
                                            <a href="#" class="active" id="register-form-link">Register</a>
                                    </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="register-form" role="form" method="POST" action="/auth/register">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <input type="text hidden" name="username" id="name" tabindex="1" class="form-control" placeholder="Username" value="{{ old('username') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="email hidden" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" id="password" tabindex="2" class="form-control" placeholder="Password Confirm">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
@stop