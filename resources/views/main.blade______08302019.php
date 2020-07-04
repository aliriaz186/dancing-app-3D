<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v2.2/frontend/e-commerce/index_inverse_header.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 May 2017 16:44:33 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Dance Graphics</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}"  />-->
	<link href="{{ asset('css/style.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/theme/default.css') }}" id="theme" rel="stylesheet" />
	<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	<link href="{{ asset('bootstrap-tour/build/css/bootstrap-tour.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('bootstrap-tour/build/css/bootstrap-tour-standalone.min.css') }}" rel="stylesheet">
</head>
<body>
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade">
        
                <!-- BEGIN #top-nav -->
                <div id="top-nav" class="top-nav" style="background: #000000 !important">
            <!-- BEGIN container -->
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown"><img src="{{asset('img/english.png')}}" class="flag-img" alt="" /> English <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><img src="{{asset('img/english.png')}}" class="flag-img" alt="" /> English</a></li>
                                <li><a href="#"><img src="{{asset('img/malai.png')}}" class="flag-img" alt="" /> Malai</a></li>
                                <li><a href="#"><img src="{{asset('img/spanish.png')}}" class="flag-img" alt="" /> Spanish</a></li>
                                <li><a href="#"><img src="{{asset('img/french.png')}}" class="flag-img" alt="" /> French</a></li>
                                <li><a href="#"><img src="{{asset('img/bengali.png')}}" class="flag-img" alt="" /> Bengali</a></li>
                                <li><a href="#"><img src="{{asset('img/farsi.png')}}" class="flag-img" alt="" /> Farsi</a></li>
                                <li><a href="#"><img src="{{asset('img/arabic.png')}}" class="flag-img" alt="" /> Arabic</a></li>
                                <li><a href="#"><img src="{{asset('img/urdu.png')}}" class="flag-img" alt="" /> Urdu</a></li>
                                <li><a href="#"><img src="{{asset('img/turkish.png')}}" class="flag-img" alt="" /> Turkish</a></li>
                            </ul>
                        </li>
                        <li>
                                <a href="{{ url('/register') }}">
                                    <span class="hidden-md hidden-sm hidden-xs">Sign Up</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/login') }}">
                                    <span class="hidden-md hidden-sm hidden-xs">Login</span>
                                </a>
                            </li>
                            
                            <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-facebook f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter f-s-14"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- END container -->
        </div>
        <!-- END #top-nav -->
    
        <!-- BEGIN #header -->
        <div id="header" class="header sticy-header"  style="background: #fbdf36 !important">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN header-container -->
                <div class="header-container">
                    <!-- BEGIN navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="header-logo">
                            <a href="#" style="color:#000000; ">
                                Dance<img src="{{asset('img/dance_img/logo.png')}}" style="width: 20%;" />Graphics
                            </a>
                        </div>
                    </div>
                    <!-- END navbar-header -->
        
    
                    <!-- BEGIN header-nav -->
                    <div class="header-nav" >
                        <div class=" collapse navbar-collapse" id="navbar-collapse"  >
                            <ul class="nav">
                                <li id="my-element"><a href="{{ url('/') }}">Home</a></li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        About 
                                        <i class="fa fa-angle-down"></i> 
                                        <span class="arrow top"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/about') }}">Features</a></li>
                                        <li><a href="{{ url('/about') }}">Summary</a></li>
                                        <li><a href="{{ url('/about') }}">User Testimonials</a></li>
                                        <li><a href="{{ url('/about') }}">Management Team</a></li>
                                        <li><a href="{{ url('/about') }}">FAQ's</a></li>
                                    </ul>
                                </li>
                                <li id="usage"><a href="{{ url('/chart') }}">Dance Chart</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                <li><a href="{{ url('/select') }}">Lessons</a></li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Support 
                                        <i class="fa fa-angle-down"></i> 
                                        <span class="arrow top"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('/profile')}}">Profile</a></li>
                                        <li><a href="#">User Guide</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- END header-nav -->
                    <!-- BEGIN header-nav -->
                    <div class="header-nav">
                      <ul class="nav pull-right">
                            <li class="dropdown dropdown-hover">
                                <a href="#modal-alert" class="header-cart"  data-toggle="modal">
                                    <span style="color:#000000;">BUY</span>
                                </a>
 
                            </li>
                        </ul>
                    </div>
                    <!-- END header-nav -->
                    <div class="header-nav">
                        <ul class="nav pull-right">
                            <li class="dropdown dropdown-hover">
                                <a href="#" data-toggle="dropdown">
                                <img style="border-radius: 50%;" src="{{asset('img/user-2.jpg')}}" width="50px">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/profile')}}">Profile</a></li>
                                    <li><a href="{{url('/badge')}}">Badges</a></li>
                                    <li><a href="{{url('/notifications')}}">Notifications</a></li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END header-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #header -->
    
       
    

        @yield('content')
        
        
     <!-- start tour modal start -->   
     <div class="modal fade" id="modal-alert2" style="top: 30%;">
     <div class="modal-dialog">
         <div class="modal-content" style="background: #333333;">
                <div class="modal-header" style="background: #fbdf36;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" style="color:#000000" >Start Tour</h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/dance_img/slider1.jpg')}}" style="margin-left: 25%;"/>
                </div>
                <div class="modal-footer">
                        <a href="{{ url('/guide') }}" class="btn btn-sm btn-white" >Exit</a>
                        <a href="#modal-alert3" data-toggle="modal" class="btn btn-sm " style="background: #fbdf36;color:#000000;" data-dismiss="modal">Next</a>
                </div>
            </div>
        </div>
    </div>
     
     <div class="modal fade" id="modal-alert3" style="top: 30%;">
     <div class="modal-dialog">
            <div class="modal-content" style="background: #333333;">
                <div class="modal-header" style="background: #fbdf36;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" style="color:#000000">About Us Page</h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/dance_img/about.png')}}" style="margin-left: 25%;"/>
                </div>
                <div class="modal-footer">
                        <a href="{{ url('/guide') }}" class="btn btn-sm btn-white" >Exit</a>
                        <a href="#modal-alert4" data-toggle="modal" class="btn btn-sm " style="background: #fbdf36;color:#000000;" data-dismiss="modal">Next</a>
                </div>
            </div>
        </div>
    </div>
     
     <div class="modal fade" id="modal-alert4" style="top: 30%;">
     <div class="modal-dialog">
            <div class="modal-content" style="background: #333333;">
                <div class="modal-header" style="background: #fbdf36;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" style="color:#000000">Dance Chart</h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/dance_img/dance-chart.png')}}" style="margin-left: 25%;"/>
                </div>
                <div class="modal-footer">
                        <a href="{{ url('/guide') }}" class="btn btn-sm btn-white" >Exit</a>
                        <a href="#modal-alert5" data-toggle="modal" class="btn btn-sm " style="background: #fbdf36;color:#000000;" data-dismiss="modal">Next</a>
                </div>
            </div>
        </div>
    </div>
     
     <div class="modal fade" id="modal-alert5" style="top: 30%;">
     <div class="modal-dialog">
            <div class="modal-content" style="background: #333333;">
                <div class="modal-header" style="background: #fbdf36;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" style="color:#000000">Contact us</h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/dance_img/contact_tour.png')}}" style="margin-left: 25%;"/>
                </div>
                <div class="modal-footer">
                        <a href="{{ url('/guide') }}"  class="btn btn-sm " style="background: #fbdf36;color:#000000;">Finish</a>
                </div>
            </div>
        </div>
    </div>

        <!-- start tour modal end -->   
        
        <div class="modal fade" id="modal-alert">
     <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Payment Method</h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/dance_img/payment.png')}}" style="margin-left: 25%;"/>
                </div>
                <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                        <a href="javascript:;" class="btn btn-sm " style="background: #fbdf36;color:#000000;" data-dismiss="modal">Buy Now!</a>
                </div>
            </div>
        </div>
    </div>
        

    
        <!-- BEGIN #footer -->
        <div id="footer" class="footer" style="background: #333333 !important">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN row -->
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="footer-header">ABOUT US</h4>
                         <ul class="fa-ul">
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Features</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Summary</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">User Testimonials</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Management Team</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">FAQ's</a></li>
                        </ul>
                    </div>
                    <!-- END col-3 -->
                    <div class="col-md-2"></div>
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3" >
                        <h4 class="footer-header" >CONTACT</h4>
                        <address >
                            <strong>Example, Text</strong><br />
                            420 Sample Street, Near Example<br />
                            City<br /><br />
                            <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                            <abbr title="Fax">Fax:</abbr> (123) 456-7890<br />
                            <abbr title="Email">Email:</abbr> <a href="mailto:sales@example.com">sales@example.com</a><br />
                            <abbr title="Skype">Skype:</abbr> <a href="skype:example">example</a>
                        </address>
                    </div>
                    <!-- END col-3 -->
                    <div class="col-md-1"></div>
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header" >ARTICLES</h4>
                        <ul class="fa-ul">
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Shopping Help</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Terms of Use</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="{{ url('/contact') }}">Contact Us</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Careers</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Payment Method</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sales & Refund</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sitemap</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                    <!-- END col-3 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #footer -->
    
        <!-- BEGIN #footer-copyright -->
        <div id="footer-copyright" class="footer-copyright" style="background: #000000 !important">
            <!-- BEGIN container -->
            <div class="container">
               
                
                <div class="row">
                    <div class="pull-left">Dance<img src="{{asset('img/dance_img/logo_foot.png')}}" style="width: 4%;" />Graphics</div>
                    <div style="color: #ffffff;margin-left: 50%;">All rights reserved.</div>
                </div>
            </div>
            <!-- END container -->
        </div>
        <!-- END #footer-copyright -->
    </div>
    <!-- END #page-container -->

@include('/_js_footer')


</body>
</html>
