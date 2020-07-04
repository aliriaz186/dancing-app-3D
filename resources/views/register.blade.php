@extends('main')


@section('content')

<!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container" style="background: #333333;">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#" style="color:#ffffff;">Home</a></li>
            <li><a href="{{url('/login')}}" style="color:#ffffff;">Login</a></li>
            <li class="active" style="color:#ffffff;">Register</li>
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
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('user.register') }}">
                            {{ csrf_field() }}
                            <h4 style="color:#ffffff;"><i class="fa fa-wpforms fa-fw" style="color:#ffffff;"></i> Sign
                                Up</h4>
                            <ul class="nav nav-list">
                                <li style="color:#ffffff;">Username</li>
                                <li><input type="text" class="form-control" value="{{ old('username') }}" required
                                        name="username" placeholder="Enter User name">
                                    @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li style="color:#ffffff;">Email</li>
                                <li><input type="text" class="form-control" name="email" value="{{ old('email') }}"
                                        required placeholder="Enter Email">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li style="color:#ffffff;">Password</li>
                                <li><input type="password" class="form-control" name="password"
                                        placeholder="Enter Password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </li>
                               <li style="color:#ffffff;">Confirm Password</li>
                                <li><input type="password" class="form-control" placeholder="Confirm password" type="password" class="form-control"
                                    name="password_confirmation" required>
                                </li>

                            </ul>
                            <ul class="nav nav-list">
                                <li class="antiHover"><button class="btn btn-theme"
                                        style="background: #fbdf36;color:#000000;" type="submit"
                                        name="register">Register</button></li>
                                <div class="row">
                                    <button class="loginBtn loginBtn--facebook" style="width: 60%;"><i
                                            class="fa fa-facebook"></i> Signup with Facebook</button>&nbsp;<button
                                        class="loginBtn loginBtn--google" style="width: 60%;"><i
                                            class="fa fa-google"></i> Signup with Google</button>
                                </div>
                            </ul>
                        </form>
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->

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
@endsection