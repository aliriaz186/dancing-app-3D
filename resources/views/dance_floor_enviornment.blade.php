@extends('main')

@section('content')

<div id="product" class="section-container p-t-20" style="background: #010101">
        <!-- BEGIN container -->
        <div class="container" style="background: #333333">

            <!-- BEGIN product -->
            <div class="product" style="background: #333333">

                <div class="product-tab">

                    <ul id="product-tab" class="nav nav-tabs pull-left" style="background: #000000;border-bottom: 1px solid #000000;" >
                        <li class="active"><a href="#multi-view" data-toggle="tab" style="border-bottom: 1px solid #ffffff;color: #ffffff;background-color: #000;color:#ffffff;">Front View</a></li>
                        <li class=""><a href="#side-view" data-toggle="tab" style="color:#ffffff;">Side View</a></li>
                    </ul>
                    <div id="product-tab-content" class="tab-content">

                        <div class="tab-pane fade active in" id="multi-view">
                            <!-- select box -->
                            </br>
                            
                            </br>
                            </br>
                            <!-- select box end -->
                            <div class="row row-space-30">

                                <div class="col-md-7">
                                    <video width="600"  controls >
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                    </video>
                               <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
                                    <li style="float: left;"><a href="#home" style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
                                    <li style="float: left;"><a href="#home" style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
                                    <li style="float: left;"><a href="#home" style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
                                    <li style="float: left;"><a href="#home" style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
                                    <li style="float: left;"><a href="#home" style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
                                    <li style="float: left;"><a href="#home" style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>

                                </ul>
                                    
                                 <div class="w3-container">
                                    <h2>dynamic Progress bar</h2>
                                    <p>example:</p>
                                    <div class="w3-light-grey">
                                      <div id="myBar" class="w3-container w3-green w3-center" style="width:0%">0%</div>
                                    </div>
                                    <br>
                                    <button class="w3-button w3-yellow pull-left" onclick="previous()">Previous</button>
                                    <button class="w3-button w3-yellow pull-right" onclick="next()">Next</button>

                                </div>   
                                
                                </div>

                                <div class="col-md-5" style="border:1px; border-style:solid; border-color:#ffffff; padding: 1em;background: #000000;">
                                 <div class="product-tab">
                                     <ul id="product-tab" class="nav nav-tabs" style="background:#fbdf36;">
                                                        <li class="active"><a href="#info-1" data-toggle="tab" style="background:#fbdf36;color:#000000">INFO 1</a></li>
                                                        <li class=""><a href="#info-2" data-toggle="tab" style="background:#fbdf36;color:#000000">INFO 2</a></li>
                                                        <li class=""><a href="#info-3" data-toggle="tab" style="background:#fbdf36;color:#000000">INFO 3</a></li>
                                                    </ul>
                                </div>
                                <div id="product-tab-content" class="tab-content">

                                                <div class="tab-pane fade active in" id="info-1">
                                                    <video width="300"  controls >
                                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                                    </video>
                                                    
                                                    
                                                    <h4 style="color:#ffffff">Text 1</h4>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                    

                                                </div>
                                    <div class="tab-pane fade in" id="info-2">
                                                    <video width="300"  controls >
                                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                                    </video>
                                                    
                                                    
                                                        <h4 style="color:#ffffff">Text 2</h4>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                    

                                                </div>
                                    <div class="tab-pane fade in" id="info-3">
                                                    <video width="300"  controls >
                                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                                    </video>
                                                    
                                                    
                                                        <h4 style="color:#ffffff">Text 3</h4>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                        <p style="color:#ffffff">some random text which shows info about the video</p>
                                                    

                                                </div>
                                </div>


                              </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="side-view">
                            <!-- select box -->
                            </br>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>Lesson 1</option>
                                        <option>Lesson 2</option>
                                        <option>Lesson 3</option>
                                        <option>Lesson 4</option>
                                        <option>Lesson 5</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <a href="#modal-alert"  data-toggle="modal">
                                        <i class="fa fa-info-circle fa-2x f-m-14" style="color:#fbdf36;"></i>
                                    </a>
                                </div>

                                <!-- modal start-->
                                <div class="modal fade" id="modal-alert">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">
                                                <div class="product-tab">
                                                    <ul id="product-tab" class="nav nav-tabs">
                                                        <li class="active"><a href="#info-1" data-toggle="tab">INFO 1</a></li>
                                                        <li class=""><a href="#info-2" data-toggle="tab">INFO 2</a></li>
                                                        <li class=""><a href="#info-3" data-toggle="tab">INFO 3</a></li>
                                                    </ul>
                                                </div>
                                            </h4>


                                            <div id="product-tab-content" class="tab-content">

                                                <div class="tab-pane fade active in" id="info-1">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;">
                                                        <h4>Text 1</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-2">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;">
                                                        <h4>Text 2</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-3">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;">
                                                        <h4>Text 3</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!-- modal end -->

                            </div>
                            </br>
                            </br>
                            <!-- select box end -->
                            <div class="row row-space-30">

                                <div class="col-md-7">
                                    <video width="600"  controls >
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                    </video>
                                </div>

                                <div class="col-md-5" style="border:1px; border-style:solid; border-color:#000000; padding: 1em;">


                                    <h3  style="background-color:#b5b102;">How to perform Dance move</h3>

                                    <li><a href="#" style="color:#000000;"> Moon Walk </a></li>
                                    <li><a href="#" style="color:#000000;"> Side Step </a></li>
                                    <li><a href="#" style="color:#000000;"> Spin </a></li>
                                    <li><a href="#" style="color:#000000;"> Harem Twist </a></li>
                                    <li><a href="#" style="color:#000000;"> Running Man </a></li>
                                    <li><a href="#" style="color:#000000;"> Death Spin </a></li>


                                </div>



                                <div class="col-md-12" style="border:1px; border-style:solid; border-color:#000000; padding: 1em;">
                                    She was more like a beauty queen from a movie scene. I said don't mind but what do u mean, i am the one.
                                </div>


                            </div>
                        </div>

                        
                    </div>
                </div>

            </div>

        </div>
        <!-- END container -->
    </div>

    </br>

    @include('/_fa')
@endsection