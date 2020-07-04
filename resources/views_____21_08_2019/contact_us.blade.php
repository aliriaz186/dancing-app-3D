@extends('main')

@section('content')

    <!-- BEGIN #page-header -->
    <div id="page-header" class="section-container page-header-container bg-black">
        <!-- BEGIN page-header-cover -->
        <div class="page-header-cover">
            <img src="{{asset('img/contact-us-cover.jpg')}}" alt="" />
        </div>
        <!-- END page-header-cover -->
        <!-- BEGIN container -->
        <div class="container">
            <h1 class="page-header"><b>Contact</b> Us</h1>
        </div>
        <!-- END container -->
    </div>
    <!-- BEGIN #page-header -->

    <!-- BEGIN #product -->
    <div id="product" class="section-container p-t-20">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN breadcrumb -->
            <ul class="breadcrumb m-b-10 f-s-12">
                <li><a href="#">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
            <!-- END breadcrumb -->
            <!-- BEGIN row -->
            <div class="row row-space-30">
                <!-- BEGIN col-8 -->
                <div class="col-md-8">
                    <h4 class="m-t-0">Contact Form</h4>

                    <form class="form-horizontal" name="contact_us_form" action="{{url('/contact')}}" method="GET">
                        <div class="form-group">
                            <label class="control-label col-md-3">Name <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control"  name="name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Subject <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="subject" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Message <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <textarea class="form-control" rows="10" name="message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-inverse btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END col-8 -->
                <!-- BEGIN col-4 -->
                <div class="col-md-4">
                    <h4 class="m-t-0">Our Contacts</h4>
                    <div class="embed-responsive embed-responsive-16by9 m-b-15">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3306.9584799260138!2d-118.49437019999998!3d34.019276700000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4cedd1266ff%3A0x1ffe328381544853!2sGoogle+Inc!5e0!3m2!1sen!2s!4v1435718319426" allowfullscreen></iframe>
                    </div>
                    <div><b>Dance Graphics</b></div>
                    <p class="m-b-15">
                        <strong>Example, Text</strong><br />
                        420 Sample Street, Near Example<br />
                        City<br /><br />
                    </p>
                    <div><b>Email</b></div>
                    <p class="m-b-15">
                        <a href="mailto:hello@emailaddress.com" class="text-inverse">info@example.com</a><br />
                        <a href="mailto:hello@emailaddress.com" class="text-inverse">business@example.com</a><br />
                        <a href="mailto:hello@emailaddress.com" class="text-inverse">support@example.com</a><br />
                    </p>

                <!-- END col-4 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END row -->
    </div>
    <!-- END #product -->

@include('/_fa')
@endsection