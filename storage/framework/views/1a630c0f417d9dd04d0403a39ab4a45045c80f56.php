 


<?php $__env->startSection('content'); ?>


        <!-- BEGIN #page-header -->
        
        <!-- BEGIN #about-us-cover -->
        <div id="about-us-cover" class="has-bg section-container">
            <!-- BEGIN cover-bg -->
            <div class="cover-bg">
                <img src="<?php echo e(asset('img/slider-3-cover.jpg')); ?>" alt="" style="width: 100%;height: auto;"/>
            </div>
            <!-- END cover-bg -->
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN breadcrumb -->
                <ul class="breadcrumb m-b-10 f-s-12">
                    <li><a href="#">Home</a></li>
                    <li class="active">Guide Tour</li>
                </ul>
                <!-- END breadcrumb -->
                <!-- BEGIN about-us -->
                <div class="about-us text-center" style="padding: 0px 0;">
                    <h2>Lessons</h2>

                </div>
                <!-- END about-us -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #about-us-cover -->
        
        <!-- BEGIN #about-us-content -->
        <div id="about-us-content" class="section-container" style="background:#010101;">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN about-us-content -->
                <div class="about-us-content">
                    <!-- BEGIN row -->
                    <hr />
                    <div style="background: " class="row">
                       <div class="col-md-12">
                       <?php if(Auth::check()): ?> 
                        <table id="data-table" class="table table-bordered" style="background: #333333">
                             
                            <thead>
                                    <tr>
                                    	<th style="color:#fbdf36;text-align: center">Sr#</th>
                                        <th style="color:#fbdf36;">Lessons</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php if(isset($lessons)): ?>
                                   <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;text-align: center"><?php echo e($lesson->id); ?></td>
                                        <td><a href="<?php echo e(url('/section',['id'=>$lesson->id])); ?>" style="color:#ffffff;"><?php echo e($lesson->lesson_name); ?></a></td>
                                    </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                                
                            </table>
                            <?php else: ?>
                            <table id="data-table" class="table table-bordered" style="background: #333333">
                             
                            <thead>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                    <td style="color:white">
                                    You are Not Authorize to See Lesson's Please Login first    
                                </td>
                                    </tr>
                                </tbody>
                                
                            </table>

                            <?php endif; ?>
                        
                    </div>
                                    
                    </div>
                    <!-- END row -->
                    <hr />
                    
                </div>
                <!-- END about-us-content -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #about-us-content -->
<?php echo $__env->make('/_fa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dancing-app-3D\resources\views/select_lesson.blade.php ENDPATH**/ ?>