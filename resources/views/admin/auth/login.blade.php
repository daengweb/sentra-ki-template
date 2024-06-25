@extends('layouts.admin-auth')

@section('title')
<title>Login</title>
@endsection

@section('content')
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ url('/') }}" class="h1"><b>PNB</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('administrator.login') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>

            <p class="mb-1">
                <a href="#">I forgot my password</a>
            </p>
        </div>
    </div>
@endsection