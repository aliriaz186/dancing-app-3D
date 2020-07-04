{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
{{ csrf_field() }}

<div class="form-group row">
    <label for="login" class="col-sm-4 col-form-label text-md-right">
        {{ __('Username or Email') }}
    </label>

    <div class="col-md-6">
        <input id="login" type="text"
            class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
            name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

        @if ($errors->has('username') || $errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Login
        </button>

        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DanceApp | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/square/blue.css')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>DANCE </b>App</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
                @if(isset($message))
                <div class="alert alert-danger hidout" role="alert">
                       {{ $message }}
                </div>
                @endif
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
        <input id="login" type="text" placeholder="Enter Username or Email"
                                    class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
                        
                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong style="color:red">{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
           <input id="password" type="password" class="form-control" placeholder="password" name="password" required>
                            <div class="col-md-6">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
           <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
<div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
               <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

                                <a  href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a><br>
<a href="{{route('register')}}" class="text-center">Register as a new member</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script>
setTimeout(function() {
    document.querySelector('.hidout').style.display="none";
}, 5000);
</script>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2019 22:23:17 GMT -->
</html>