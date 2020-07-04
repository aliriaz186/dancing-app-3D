<?php $__env->startSection('content'); ?>

<!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container" style="background: #333333;">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#" style="color:#ffffff;">Home</a></li>
            <li><a href="<?php echo e(url('/login')); ?>" style="color:#ffffff;">Login</a></li>
            <li class="active" style="color:#ffffff;">Register</li>
        </ul>
        <!-- END breadcrumb -->
        <!-- BEGIN account-container -->
        <div class="account-container">
            <!-- BEGIN account-sidebar -->
            <div class="account-sidebar">
                <div class="account-sidebar-cover">
                    <img src="<?php echo e(asset('img/my-account-cover.jpg')); ?>" alt="" />
                </div>

            </div>
            <!-- END account-sidebar -->
            <!-- BEGIN account-body -->
            <div class="account-body" style="background: #333333;">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        <form method="POST" action="<?php echo e(route('user.register')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <h4 style="color:#ffffff;"><i class="fa fa-wpforms fa-fw" style="color:#ffffff;"></i> Sign
                                Up</h4>
                            <ul class="nav nav-list">
                                <li style="color:#ffffff;">Username</li>
                                <li><input type="text" class="form-control" value="<?php echo e(old('username')); ?>" required
                                        name="username" placeholder="Enter User name">
                                    <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong style="color:red"><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </li>
                                <li style="color:#ffffff;">Email</li>
                                <li><input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                        required placeholder="Enter Email">
                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong style="color:red"><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </li>
                                <li style="color:#ffffff;">Password</li>
                                <li><input type="password" class="form-control" name="password"
                                        placeholder="Enter Password">
                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong style="color:red"><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </li>
                               <li style="color:#ffffff;">Confirm Password</li>
                                <li><input type="password" class="form-control" placeholder="Confirm password" type="password" class="form-control"
                                    name="password_confirmation" required>
                                </li>

                            </ul>
                            <ul class="nav nav-list">
                                <li class="antiHover"><button class="btn btn-theme"
                                        style="background: #fbdf36;color:#000000;" type="submit"
                                        name="register">Register</button></li>
                                <div class="row">
                                    <button class="loginBtn loginBtn--facebook" style="width: 60%;"><i
                                            class="fa fa-facebook"></i> Signup with Facebook</button>&nbsp;<button
                                        class="loginBtn loginBtn--google" style="width: 60%;"><i
                                            class="fa fa-google"></i> Signup with Google</button>
                                </div>
                            </ul>
                        </form>
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->

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
<?php echo $__env->make('/_fa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dancing-app-3D\resources\views/register.blade.php ENDPATH**/ ?>