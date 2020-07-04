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
                <img src="{{asset('img/about-us-cover.jpg')}}" alt="" />
            </div>
            <!-- END cover-bg -->
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN breadcrumb -->
                <ul class="breadcrumb m-b-10 f-s-12">
                    <li><a href="#">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
                <!-- END breadcrumb -->
                <!-- BEGIN about-us -->
                <div class="about-us text-center">
                    <h1>About Dance Graphics</h1>
                    <p>
                        A Website to learn dancing step by step with fully guided tour .
                    </p>
                </div>
                <!-- END about-us -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #about-us-cover -->
        
        <!-- BEGIN #about-us-content -->
        <div id="about-us-content" class="section-container bg-white">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN about-us-content -->
                <div class="about-us-content">
                    <h2 class="title text-center">What we do?</h2>
                    <p class="desc text-center">
                        We teach you dance step by step. 
                    </p>
                    
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- begin col-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="service">
                                <div class="icon text-muted"><i class="fa fa-play"></i></div>
                                <div class="info">
                                    <h4 class="title">Step by Step Videos</h4>
                                    <p class="desc">Full Videos with easy to learn steps</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col-4 -->
                        <!-- begin col-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="service">
                                <div class="icon text-primary"><i class="fa fa-bar-chart-o"></i></div>
                                <div class="info">
                                    <h4 class="title">Dance Move chart</h4>
                                    <p class="desc">Full Dance Chart Available</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col-4 -->
                        <!-- begin col-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="service">
                                <div class="icon text-info"><i class="fa fa-child"></i></div>
                                <div class="info">
                                    <h4 class="title">Dance</h4>
                                    <p class="desc">Example Content added.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col-4 -->
                    </div>
                    <!-- END row -->
                    <hr />
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- begin col-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="service">
                                <div class="icon text-danger"><i class="fa fa-money"></i></div>
                                <div class="info">
                                    <h4 class="title">Price</h4>
                                    <p class="desc">Value is more expensive than price and We give Great Value.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col-4 -->
                        <!-- begin col-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="service">
                                <div class="icon text-inverse"><i class="fa fa-arrows"></i></div>
                                <div class="info">
                                    <h4 class="title">Easy to Use</h4>
                                    <p class="desc">Easy to use Website for the Customer to Scroll through easily.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col-4 -->
                        <!-- begin col-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="service">
                                <div class="icon text-success"><i class="fa fa-braille"></i></div>
                                <div class="info">
                                    <h4 class="title">Fun and Interactive</h4>
                                    <p class="desc">Dance Graphics is a fun to use and interactive website for the user to learn the best dance moves.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col-4 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END about-us-content -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #about-us-content -->
@include('/_fa')        
@endsection        