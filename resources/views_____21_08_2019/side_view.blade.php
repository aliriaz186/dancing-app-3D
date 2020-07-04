@extends('main')

@section('content')

    <div id="product" class="section-container p-t-20">
        <!-- BEGIN container -->
        <div class="container">

            <!-- BEGIN product -->
            <div class="product">

                <div class="product-tab">

                    <ul id="product-tab" class="nav nav-tabs">
                        <li class="active"><a href="#multi-view" data-toggle="tab">Multi View</a></li>
                        <li class=""><a href="#side-view" data-toggle="tab">Side View</a></li>
                        <li class=""><a href="#animation-view" data-toggle="tab">Animation View</a></li>
                        <li class=""><a href="#3d-view" data-toggle="tab">3D View</a></li>
                        <li class=""><a href="#face-view" data-toggle="tab">Face View</a></li>
                    </ul>
                    <div id="product-tab-content" class="tab-content">

                        <div class="tab-pane fade active in" id="multi-view">
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
                                        <i class="fa fa-info-circle fa-2x f-m-14" style="color:#b5b102;"></i>
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
                                    <video width="190" height="400" controls >
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                    </video>
                                    <video width="190" height="400" controls >
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                    </video>
                                    <video width="190" height="400" controls >
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
                                        <i class="fa fa-info-circle fa-2x f-m-14" style="color:#b5b102;"></i>
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

                        <div class="tab-pane fade" id="animation-view">
                            <p style="text-align: center">Will Show the Animation View</p>
                        </div>

                        <div class="tab-pane fade" id="3d-view">
                            <p style="text-align: center">Will Show the 3D View</p>
                        </div>

                        <div class="tab-pane fade" id="face-view">
                            <p style="text-align: center">Will Show the Face View</p>
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