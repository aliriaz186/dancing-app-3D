<?php $__env->startSection('content'); ?>
    <div id="about-us-cover" class="has-bg section-container">
        <!-- BEGIN cover-bg -->
        <div class="cover-bg">
            <img src="<?php echo e(asset('img/slider-3-cover.jpg')); ?>" alt="" style="width: 100%;height: auto;" />
        </div>
        <!-- END cover-bg -->
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN breadcrumb -->
            <ul class="breadcrumb m-b-10 f-s-12">
                <li><a href="#">Home</a></li>
                <li class="active">Badges</li>
            </ul>
            <!-- END breadcrumb -->
            <!-- BEGIN about-us -->
            <div class="about-us text-center" style="padding: 0px 0;">
                <h2>Badges</h2>

            </div>
            <!-- END about-us -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #about-us-cover -->

        <div id="about-us-content" class="section-container" style="background:#000000;">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN about-us-content -->
                <div class="about-us-content" style="background: #333333;">
                    <div class="row">
                        <div class="col-md-6">

                            <ul style="list-style: none;color: #fff;" >
                                <li>
                                    <img src="<?php echo e(asset('img/dance_img/badge.png')); ?>" width="100px" alt="badge" />  <a href="#modal-alert" data-toggle="modal" style="color: #fff">Lesson 1 </a>
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('img/dance_img/badge.png')); ?>" width="100px" alt="badge" />  <a href="#modal-alert" data-toggle="modal" style="color: #fff">Lesson 1 </a>
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('img/dance_img/badge.png')); ?>" width="100px" alt="badge" /> <a href="#modal-alert" data-toggle="modal" style="color: #fff">Lesson 1 </a>
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('img/dance_img/badge.png')); ?>" width="100px" alt="badge" />  <a href="#modal-alert" data-toggle="modal" style="color: #fff">Lesson 1 </a>
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('img/dance_img/badge.png')); ?>" width="100px" alt="badge" />  <a href="#modal-alert" data-toggle="modal" style="color: #fff">Lesson 1 </a>
                                </li>
                            </ul>


                        </div>

                    </div>

                    <div class="modal fade" id="modal-alert" style="top: 30%;">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background: #ffffff;">
                                <div class="modal-header" style="background: #fbdf36;">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" style="color:#000000;text-align: center;" >Practice makes Perfect</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo e(asset('img/dance_img/badge.png')); ?>" width="300px" style="margin-left: 25%;"/>
                                </div>
                                <div class="modal-footer" style="text-align: center;">
                                    <img src="<?php echo e(asset('img/dance_img/share-on-facebook.png')); ?>"  width="200px" /><img src="<?php echo e(asset('img/dance_img/twitter_button.png')); ?>" width="200px" />
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END about-us-content -->
            </div>
            <!-- END container -->
        </div>
        </br></br>
<?php echo $__env->make('/_fa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dancing-app-3D\resources\views/view_badges.blade.php ENDPATH**/ ?>