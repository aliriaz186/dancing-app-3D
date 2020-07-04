@extends('main')


@section('content')

<!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container" style="background: #333333;">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#" style="color:#ffffff;">Home</a></li>
            <li class="active" style="color:#ffffff;">Login</li>
        </ul>
        <!-- END breadcrumb -->
        <!-- BEGIN account-container -->
        <div class="account-container">
            <!-- BEGIN account-sidebar -->
            <div class="account-sidebar">
                <div class="account-sidebar-cover">
                    <img src="{{asset('img/my-account-cover.jpg')}}" alt="" />
                </div>

            </div>
            <!-- END account-sidebar -->
            <!-- BEGIN account-body -->
            <div class="account-body" style="background: #333333;">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-6 -->
                    @if(Session::has('success'))
                    <div class="alert alert-info hidout" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <input id="login" type="text" placeholder="Enter Username or Email"
                                    class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

                                @if ($errors->has('username') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong
                                        style="color:red">{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input id="password" type="password" class="form-control" placeholder="password"
                                    name="password" required>
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
                                            <input type="checkbox" name="remember"
                                                {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat"
                                        style="background: #fbdf36;color:#000000;">Sign In</button>
                                </div>
                                <!-- /.col -->
                                <div class="row">
                                    <button class="loginBtn loginBtn--facebook" style="width: 60%;"><i
                                            class="fa fa-facebook"></i> Signup with Facebook</button>&nbsp;<button
                                        class="loginBtn loginBtn--google" style="width: 60%;"><i
                                            class="fa fa-google"></i> Signup with Google</button>
                                </div>

                            </div>
                    </form>

                </div>
                <!-- END col-6 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END account-body -->
    </div>
    <!-- END account-container -->
</div>
<!-- END container -->
</div>
<!-- END #about-us-cover -->
@include('/_fa')
<script>
setTimeout(function() {
    document.querySelector('.hidout').style.display="none";
}, 5000);
</script>
@endsection