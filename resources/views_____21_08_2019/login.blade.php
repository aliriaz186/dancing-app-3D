@extends('main')


@section('content')

    <!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#">Home</a></li>
            <li class="active">Login</li>
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
                        <h4><i class="fa fa-gitlab fa-fw text-muted"></i> Login</h4>
                        <ul class="nav nav-list">
                            <li>Username/Email</li>
                            <li><input type="text" class="form-control" placeholder="Enter User name/ Email"></li>
                            <li>Password</li>
                            <li><input type="text" class="form-control" placeholder="Enter Password" ></li>
                        </ul>
                        </form>
                        <ul class="nav nav-list">
                            <div class="row" ><li><button class="btn btn-theme" style="background:#b5b102;color: #ffffff;" type="submit" name="register">Login </button> OR <a href="{{url('/register')}}"> <button class="btn btn-theme" style="background:#b5b102;color: #ffffff;" type="submit" name="register"> Register</button></a></li></div>
                            </br>
                            <div class="row">
                                <button class="loginBtn loginBtn--facebook" style="width: 60%;"><i class="fa fa-facebook"></i>   Login with Facebook</button>&nbsp;<button class="loginBtn loginBtn--google" style="width: 60%;"><i class="fa fa-google" ></i>   Login with Google</button>
                            </div>
                        </ul>

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
@endsection