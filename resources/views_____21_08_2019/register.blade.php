@extends('main')


@section('content')

    <!-- BEGIN #my-account -->
    <div id="about-us-cover" class="section-container">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN breadcrumb -->
            <ul class="breadcrumb m-b-10 f-s-12">
                <li><a href="#">Home</a></li>
                <li><a href="{{url('/login')}}">Login</a></li>
                <li class="active" >Register</li>
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
                <div class="account-body">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-6 -->
                        <div class="col-md-6">
                            <form>
                                <h4><i class="fa fa-wpforms fa-fw text-muted"></i> Sign Up</h4>
                                <ul class="nav nav-list">
                                    <li>Username</li>
                                    <li><input type="text" class="form-control" placeholder="Enter User name"></li>
                                    <li>Email</li>
                                    <li><input type="text" class="form-control" placeholder="Enter Email" ></li>
                                    <li>Password</li>
                                    <li><input type="text" class="form-control" placeholder="Enter Password" ></li>
                                    <li>Confirm Password</li>
                                    <li><input type="text" class="form-control" placeholder="Enter Confirm Password" ></li>
                                </ul>

                                <ul class="nav nav-list">
                                    <li><button class="btn btn-theme" style="background:#b5b102 ;color: #ffffff;" type="submit" name="register">Register</button></li>
                            <div class="row">
                                <button class="loginBtn loginBtn--facebook" style="width: 60%;"><i class="fa fa-facebook"></i>   Signup with Facebook</button>&nbsp;<button class="loginBtn loginBtn--google" style="width: 60%;"><i class="fa fa-google" ></i>   Signup with Google</button>
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