<?php $__env->startSection('content'); ?>

<div id="product" class="section-container p-t-20" style="background: #010101">
        <!-- BEGIN container -->
        <div class="container" style="background: #333333">

            <!-- BEGIN product -->
            <div class="product" style="background: #333333">

                <div class="product-tab">

                    <ul id="product-tab" class="nav nav-tabs" style="background: #000000;border-bottom: 1px solid #000000;">
                        <li class="active"><a href="#multi-view" data-toggle="tab" style="border-bottom: 1px solid #ffffff;color: #ffffff;background-color: #000;color:#ffffff;">Multi View</a></li>
                        <li class=""><a href="#side-view" data-toggle="tab" style="color:#ffffff;">Side View</a></li>
                        <li class=""><a href="#animation-view" data-toggle="tab"  style="color:#ffffff;">Animation View</a></li>
                        <li class=""><a href="#3d-view" data-toggle="tab"  style="color:#ffffff;">3D View</a></li>
                        <li class=""><a href="#face-view" data-toggle="tab"  style="color:#ffffff;">Face View</a></li>
                    </ul>
                    <div id="product-tab-content" class="tab-content">
<!--     This is the main view     -->
<!--     This is the main view     -->
<!--     This is the main view     -->
<!--     This is the main view     -->
<!--     This is the main view     -->
<!--     This is the main view     -->
<!--     This is the main view     -->
<!--     This is the main view     -->
                        <div class="tab-pane fade active in" id="multi-view">
                            <!-- select box -->
                            </br>
                            <div class="form-group">
                                <div class="col-md-11">
                                    <select class="form-control">
                                        <option>Lesson 1</option>
                                        <option>Lesson 2</option>
                                        <option>Lesson 3</option>
                                        <option>Lesson 4</option>
                                        <option>Lesson 5</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
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
                                                    <ul id="product-tab" class="nav nav-tabs" style="background:#fbdf36;">
                                                        <li class="active"><a href="#info-1" data-toggle="tab" style="background:#fbdf36;">INFO 1</a></li>
                                                        <li class=""><a href="#info-2" data-toggle="tab" style="background:#fbdf36;">INFO 2</a></li>
                                                        <li class=""><a href="#info-3" data-toggle="tab" style="background:#fbdf36;">INFO 3</a></li>
                                                    </ul>
                                                </div>
                                            </h4>


                                            <div id="product-tab-content" class="tab-content" style="background:#000000;">

                                                <div class="tab-pane fade active in" id="info-1" >

                                                    <div class="modal-body" >
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left; color:#ffffff;">
                                                        <h4>Text 1</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-2">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
                                                        <h4>Text 2</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-3">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
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
                                    <ul id="content">
										<li>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float:left;padding:3px;"><div class="progress-circle p0">
										   <span>0%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
										</ul>
										
										</li>
										
										<li>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p20">
											   <span>20%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
												<div class="progress-circle p40">
											   <span>40%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>									
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p60">
											   <span>60%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>
										
										<li>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p80">
											   <span>80%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										<li>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<video width="180" height="400"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p100">
											   <span>100%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										
									</ul>
									 </div>


                                <div class="col-md-5" style="border:1px; border-style:solid; border-color:#000000; padding: 1em;background: #ffffff;">

								<div id="red">
                                <h3  style="background-color:#fbdf36;">How to perform Dance move</h3>
										
                                   <li><a href="#" style="color:#000000;"> Moon Walk </a></li>
                                   <li><a href="#" style="color:#000000;"> Side Step </a></li>
                                   <li><a href="#" style="color:#000000;"> Spin </a></li>
                                   <li><a href="#" style="color:#000000;"> Harem Twist </a></li>
                                  <li><a href="#" style="color:#000000;"> Running Man </a></li>
                                   <li><a href="#" style="color:#000000;"> Death Spin </a></li>
								</div>
								</br>
						  <form class="col s8 offset-s2">
    
							  <input type="hidden" id="rate" value="6" />
							<input type="hidden" id="pitch" value="2" />
							<input id="message" type="hidden" value= "Moon Walk,Side Step,Spin,Harem Twist,Running Man,Death Spin">

						  	<div id="page-cover"></div>
							<img id="speak" src="<?php echo e(asset('img/dance_img/play.png')); ?>" alt="" style="z-index: 100;display: block;margin-left: auto;margin-right: auto;"/>
							</form>





                             </div>


								<br>



                            </div>
                        </div>
<!--     This is the side view     -->
<!--     This is the side view     -->
<!--     This is the side view     -->
<!--     This is the side view     -->
<!--     This is the side view     -->
<!--     This is the side view     -->
<!--     This is the side view     -->
<!--     This is the side view     -->
<!--     This is the side view     -->
                        <div class="tab-pane fade" id="side-view">
                            <!-- select box -->
                            </br>
                            <div class="form-group">
                                <div class="col-md-11">
                                    <select class="form-control">
                                        <option>Lesson 1</option>
                                        <option>Lesson 2</option>
                                        <option>Lesson 3</option>
                                        <option>Lesson 4</option>
                                        <option>Lesson 5</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <a href="#modal-alert11"  data-toggle="modal">
                                        <i class="fa fa-info-circle fa-2x f-m-14" style="color:#fbdf36;"></i>
                                    </a>
                                </div>

                                <!-- modal start-->
                                <div class="modal fade" id="modal-alert11">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">
                                                <div class="product-tab">
                                                    <ul id="product-tab" class="nav nav-tabs" style="background:#fbdf36;">
                                                        <li class="active"><a href="#info-11" data-toggle="tab" style="background:#fbdf36;">INFO 1</a></li>
                                                        <li class=""><a href="#info-22" data-toggle="tab" style="background:#fbdf36;">INFO 2</a></li>
                                                        <li class=""><a href="#info-33" data-toggle="tab" style="background:#fbdf36;">INFO 3</a></li>
                                                    </ul>
                                                </div>
                                            </h4>


                                            <div id="product-tab-content" class="tab-content" style="background:#000000;">

                                                <div class="tab-pane fade active in" id="info-11" >

                                                    <div class="modal-body" >
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left; color:#ffffff;">
                                                        <h4>Text 1</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-22">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
                                                        <h4>Text 2</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-33">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
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
                                    <ul id="content2">
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
										<div class="progress-circle p0">
										   <span>0%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>										
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
										</ul>
										
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p20">
											   <span>20%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p40">
										   <span>40%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>									
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
										<div class="progress-circle over50 p60">
										   <span>60%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>										
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p80">
											   <span>80%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p100">
											   <span>100%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										
									</ul>
									 </div>

								<div class="col-md-5" style="border:1px; border-style:solid; border-color:#000000; padding: 1em;background: #ffffff;">

									<div id="red2">
										<h3  style="background-color:#fbdf36;">How to perform Dance move</h3>

										<li><a href="#" style="color:#000000;"> Moon Walk </a></li>
										<li><a href="#" style="color:#000000;"> Side Step </a></li>
										<li><a href="#" style="color:#000000;"> Spin </a></li>
										<li><a href="#" style="color:#000000;"> Harem Twist </a></li>
										<li><a href="#" style="color:#000000;"> Running Man </a></li>
										<li><a href="#" style="color:#000000;"> Death Spin </a></li>
									</div>
									</br>
									<form class="col s8 offset-s2">

										<input type="hidden" id="rate" value="6" />
										<input type="hidden" id="pitch" value="2" />
										<input id="message2" type="hidden" value= "Moon Walk,Side Step,Spin,Harem Twist,Running Man,Death Spin">

										<div id="page-cover2"></div>
										<img id="speak2" src="<?php echo e(asset('img/dance_img/play.png')); ?>" alt="" style="z-index: 100;display: block;margin-left: auto;margin-right: auto;"/>
									</form>





								</div>


								<br>



                            </div>
							
							
                        </div>
<!--     This is the animation view     -->
<!--     This is the animation view     -->
<!--     This is the animation view     -->
<!--     This is the animation view     -->
<!--     This is the animation view     -->
<!--     This is the animation view     -->
<!--     This is the animation view     -->
                        <div class="tab-pane fade" id="animation-view">
                                                        <!-- select box -->
                            </br>
                            <div class="form-group">
                                <div class="col-md-11">
                                    <select class="form-control">
                                        <option>Lesson 1</option>
                                        <option>Lesson 2</option>
                                        <option>Lesson 3</option>
                                        <option>Lesson 4</option>
                                        <option>Lesson 5</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <a href="#modal-alert222"  data-toggle="modal">
                                        <i class="fa fa-info-circle fa-2x f-m-14" style="color:#fbdf36;"></i>
                                    </a>
                                </div>

                                <!-- modal start-->
                                <div class="modal fade" id="modal-alert222">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">
                                                <div class="product-tab">
                                                    <ul id="product-tab" class="nav nav-tabs" style="background:#fbdf36;">
                                                        <li class="active"><a href="#info-111" data-toggle="tab" style="background:#fbdf36;">INFO 1</a></li>
                                                        <li class=""><a href="#info-222" data-toggle="tab" style="background:#fbdf36;">INFO 2</a></li>
                                                        <li class=""><a href="#info-333" data-toggle="tab" style="background:#fbdf36;">INFO 3</a></li>
                                                    </ul>
                                                </div>
                                            </h4>


                                            <div id="product-tab-content" class="tab-content" style="background:#000000;">

                                                <div class="tab-pane fade active in" id="info-111" >

                                                    <div class="modal-body" >
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left; color:#ffffff;">
                                                        <h4>Text 1</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-222">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
                                                        <h4>Text 2</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-333">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
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
                                    <ul id="content3">
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
										<div class="progress-circle p0">
										   <span>0%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>										
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
										</ul>
										
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
										<div class="progress-circle p20">
										   <span>20%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>										
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p40">
										   <span>40%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>									
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
										<div class="progress-circle over50 p60">
										   <span>60%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>										
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p80">
											   <span>80%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p100">
											   <span>100%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										
									</ul>
									 </div>

								<div class="col-md-5" style="border:1px; border-style:solid; border-color:#000000; padding: 1em;background: #ffffff;">

									<div id="red3">
										<h3  style="background-color:#fbdf36;">How to perform Dance move</h3>

										<li><a href="#" style="color:#000000;"> Moon Walk </a></li>
										<li><a href="#" style="color:#000000;"> Side Step </a></li>
										<li><a href="#" style="color:#000000;"> Spin </a></li>
										<li><a href="#" style="color:#000000;"> Harem Twist </a></li>
										<li><a href="#" style="color:#000000;"> Running Man </a></li>
										<li><a href="#" style="color:#000000;"> Death Spin </a></li>
									</div>
									</br>
									<form class="col s8 offset-s2">

										<input type="hidden" id="rate" value="6" />
										<input type="hidden" id="pitch" value="2" />
										<input id="message3" type="hidden" value= "Moon Walk,Side Step,Spin,Harem Twist,Running Man,Death Spin">

										<div id="page-cover3"></div>
										<img id="speak3" src="<?php echo e(asset('img/dance_img/play.png')); ?>" alt="" style="z-index: 100;display: block;margin-left: auto;margin-right: auto;"/>
									</form>





								</div>


								<br>



                            </div>
                        </div>
<!--     This is the 3D view     -->
<!--     This is the 3D view     -->
<!--     This is the 3D view     -->
<!--     This is the 3D view     -->
<!--     This is the 3D view     -->
<!--     This is the 3D view     -->
<!--     This is the 3D view     -->
                        <div class="tab-pane fade" id="3d-view">
                                                                                    <!-- select box -->
                            </br>
                            <div class="form-group">
                                <div class="col-md-11">
                                    <select class="form-control">
                                        <option>Lesson 1</option>
                                        <option>Lesson 2</option>
                                        <option>Lesson 3</option>
                                        <option>Lesson 4</option>
                                        <option>Lesson 5</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <a href="#modal-alert3333"  data-toggle="modal">
                                        <i class="fa fa-info-circle fa-2x f-m-14" style="color:#fbdf36;"></i>
                                    </a>
                                </div>

                                <!-- modal start-->
                                <div class="modal fade" id="modal-alert3333">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">
                                                <div class="product-tab">
                                                    <ul id="product-tab" class="nav nav-tabs" style="background:#fbdf36;">
                                                        <li class="active"><a href="#info-1111" data-toggle="tab" style="background:#fbdf36;">INFO 1</a></li>
                                                        <li class=""><a href="#info-2222" data-toggle="tab" style="background:#fbdf36;">INFO 2</a></li>
                                                        <li class=""><a href="#info-3333" data-toggle="tab" style="background:#fbdf36;">INFO 3</a></li>
                                                    </ul>
                                                </div>
                                            </h4>


                                            <div id="product-tab-content" class="tab-content" style="background:#000000;">

                                                <div class="tab-pane fade active in" id="info-1111" >

                                                    <div class="modal-body" >
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left; color:#ffffff;">
                                                        <h4>Text 1</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-2222">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
                                                        <h4>Text 2</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-3333">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
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
                                    <ul id="content4">
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p0">
											   <span>0%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
										</ul>
										
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p20">
											   <span>20%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p40">
										   <span>40%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>									
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p60">
											   <span>60%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p80">
											   <span>80%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p100">
											   <span>100%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										
									</ul>
									 </div>

								<div class="col-md-5" style="border:1px; border-style:solid; border-color:#000000; padding: 1em;background: #ffffff;">

									<div id="red4">
										<h3  style="background-color:#fbdf36;">How to perform Dance move</h3>

										<li><a href="#" style="color:#000000;"> Moon Walk </a></li>
										<li><a href="#" style="color:#000000;"> Side Step </a></li>
										<li><a href="#" style="color:#000000;"> Spin </a></li>
										<li><a href="#" style="color:#000000;"> Harem Twist </a></li>
										<li><a href="#" style="color:#000000;"> Running Man </a></li>
										<li><a href="#" style="color:#000000;"> Death Spin </a></li>
									</div>
									</br>
									<form class="col s8 offset-s2">

										<input type="hidden" id="rate" value="6" />
										<input type="hidden" id="pitch" value="2" />
										<input id="message4" type="hidden" value= "Moon Walk,Side Step,Spin,Harem Twist,Running Man,Death Spin">

										<div id="page-cover4"></div>
										<img id="speak4" src="<?php echo e(asset('img/dance_img/play.png')); ?>" alt="" style="z-index: 100;display: block;margin-left: auto;margin-right: auto;"/>
									</form>





								</div>


								<br>



                            </div>
                        </div>
<!--     This is the face view     -->
<!--     This is the face view     -->
<!--     This is the face view     -->
<!--     This is the face view     -->
<!--     This is the face view     -->
<!--     This is the face view     -->
<!--     This is the face view     -->
<!--     This is the face view     -->


                        <div class="tab-pane fade" id="face-view">
                                                                                   <!-- select box -->
                            </br>
                            <div class="form-group">
                                <div class="col-md-11">
                                    <select class="form-control">
                                        <option>Lesson 1</option>
                                        <option>Lesson 2</option>
                                        <option>Lesson 3</option>
                                        <option>Lesson 4</option>
                                        <option>Lesson 5</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <a href="#modal-alert44444"  data-toggle="modal">
                                        <i class="fa fa-info-circle fa-2x f-m-14" style="color:#fbdf36;"></i>
                                    </a>
                                </div>

                                <!-- modal start-->
                                <div class="modal fade" id="modal-alert44444">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">
                                                <div class="product-tab">
                                                    <ul id="product-tab" class="nav nav-tabs" style="background:#fbdf36;">
                                                        <li class="active"><a href="#info-11111" data-toggle="tab" style="background:#fbdf36;">INFO 1</a></li>
                                                        <li class=""><a href="#info-22222" data-toggle="tab" style="background:#fbdf36;">INFO 2</a></li>
                                                        <li class=""><a href="#info-33333" data-toggle="tab" style="background:#fbdf36;">INFO 3</a></li>
                                                    </ul>
                                                </div>
                                            </h4>


                                            <div id="product-tab-content" class="tab-content" style="background:#000000;">

                                                <div class="tab-pane fade active in" id="info-11111" >

                                                    <div class="modal-body" >
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left; color:#ffffff;">
                                                        <h4>Text 1</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-22222">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
                                                        <h4>Text 2</h4>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                        <p>some random text which shows info about the video</p>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="info-33333">

                                                    <div class="modal-body">
                                                        <video width="400"  controls >
                                                            <source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="modal-footer" style="text-align: left;color:#ffffff;">
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
                                    <ul id="content5">
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p0">
											   <span>0%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
										</ul>
										
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p20">
											   <span>20%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle p40">
										   <span>40%</span>
										   <div class="left-half-clipper">
											  <div class="first50-bar"></div>
											  <div class="value-bar"></div>
										   </div>
										</div>									
										</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>

										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p60">
											   <span>60%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>	
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p80">
											   <span>80%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										<li>
										<video width="550"  controls >
												<source src="<?php echo e(asset('videos/billie.mp4')); ?>" type="video/mp4">
										</video>
										
										<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #000000;">
										<li style="float: left;padding: 3px;">
											<div class="progress-circle over50 p100">
											   <span>100%</span>
											   <div class="left-half-clipper">
												  <div class="first50-bar"></div>
												  <div class="value-bar"></div>
											   </div>
											</div>										
											</li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#000000;background:#fbdf36;">حفلة راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">فن الرقص</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">قطعة موسيقية راقصة</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقصة البريك</a></li>
											<li style="float: left;"><a href="#home" style="display: block;text-align: center;padding: 16px;text-decoration: none;color:#fbdf36;">رقص</a></li>
										</ul>
										</li>
										
										
									</ul>
									 </div>

								<div class="col-md-5" style="border:1px; border-style:solid; border-color:#000000; padding: 1em;background: #ffffff;">

									<div id="red5">
										<h3  style="background-color:#fbdf36;">How to perform Dance move</h3>

										<li><a href="#" style="color:#000000;"> Moon Walk </a></li>
										<li><a href="#" style="color:#000000;"> Side Step </a></li>
										<li><a href="#" style="color:#000000;"> Spin </a></li>
										<li><a href="#" style="color:#000000;"> Harem Twist </a></li>
										<li><a href="#" style="color:#000000;"> Running Man </a></li>
										<li><a href="#" style="color:#000000;"> Death Spin </a></li>
									</div>
									</br>
									<form class="col s8 offset-s2">

										<input type="hidden" id="rate" value="6" />
										<input type="hidden" id="pitch" value="2" />
										<input id="message5" type="hidden" value= "Moon Walk,Side Step,Spin,Harem Twist,Running Man,Death Spin">

										<div id="page-cover5"></div>
										<img id="speak5" src="<?php echo e(asset('img/dance_img/play.png')); ?>" alt="" style="z-index: 100;display: block;margin-left: auto;margin-right: auto;"/>
									</form>





								</div>


								<br>



                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- END container -->
    </div>

    </br>

    <?php echo $__env->make('/_fa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dancing-app-3D\resources\views/side_view.blade.php ENDPATH**/ ?>