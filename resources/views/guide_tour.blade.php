 @extends('main')


@section('content')


<!-- BEGIN #page-header -->
        <div id="page-header" class="section-container page-header-container bg-black hide">
            <!-- BEGIN page-header-cover -->
            <div class="page-header-cover">
                <img src="assets/img/about-us-cover.jpg" alt="" />
            </div>
            <!-- END page-header-cover -->
            <!-- BEGIN container -->
            <div class="container">
                <h1 class="page-header"><b>About</b> Us</h1>
            </div>
            <!-- END container -->
        </div>
        <!-- BEGIN #page-header -->
        
        <!-- BEGIN #about-us-cover -->
        <div id="about-us-cover" class="has-bg section-container">
            <!-- BEGIN cover-bg -->
            <div class="cover-bg">
                <img src="{{asset('img/guided-tour.jpg')}}" alt="" />
            </div>
            <!-- END cover-bg -->
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN breadcrumb -->
                <ul class="breadcrumb m-b-10 f-s-12">
                    <li><a href="#">Home</a></li>
                    <li class="active">Guide tour</li>
                </ul>
                <!-- END breadcrumb -->
                <!-- BEGIN about-us -->
                <div class="about-us text-center">
                    <h1>Guided Tour</h1>
                    
                </div>
                <!-- END about-us -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #about-us-cover -->
        
        <!-- BEGIN #about-us-content -->
        <div id="about-us-content" class="section-container " style="background:#333333">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN about-us-content -->
                <div class="about-us-content">
                    <form action="{{url('/select')}}">
                    <h2 class="title text-center"><button class="btn btn-outline btn-lg fadeInRightBig animated" type="submit" style="background: green;color:white;" >Get Started</button></h2>
                    </form>
                </div>
                <!-- END about-us-content -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #about-us-content -->
@include('/_fa')        
@endsection        