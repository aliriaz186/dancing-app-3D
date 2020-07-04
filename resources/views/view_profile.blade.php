@extends('main')

@section('content')

@include('/_android_ios')

<!-- BEGIN #checkout-payment -->
<div class="section-container" id="checkout-payment">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN checkout -->
        <div class="checkout">
            <form action="#" method="POST" class="form-horizontal">
                <!-- BEGIN checkout-header -->
                <div class="checkout-header" style="background: #fbdf36;">
                    <h3 style="color:#000000;text-align: center;">View Profile</h3>
                </div>
                <!-- END checkout-header -->
                <!-- BEGIN checkout-body -->
                <div class="checkout-body">
                    {{-- {{ $user }} --}}
                    {{-- {{ $user->profile }} --}}
                    <div class="form-group">
                        <div align="center">
                            <img style="border-radius: 50%;" src="{{asset('img/user-2.jpg')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name <span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input type="text" class="form-control required" name="name" placeholder="Enter Name"
                                value="Kashif" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Email<span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input type="email" class="form-control required" name="email" placeholder="Enter Email"
                                value="example@example.com" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Country<span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <select class="form-control" name="selectBox" data-parsley-required="true">
                                <option value="">Please choose</option>
                                <option selected value="foo">Pakistan</option>
                                <option value="bar">France</option>
                                <option value="bar">Iran</option>
                                <option value="bar">Afghanistan</option>
                                <option value="bar">Iraq</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">City <span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input type="text" class="form-control required" name="city" placeholder="Enter City"
                                value="Lahore" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Gender <span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input type="text" class="form-control required" name="gender" placeholder="Enter Gender"
                                value="Male" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date of Birth <span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input type="text" class="form-control required" name="dob" placeholder=""
                                value="03-08-2019" />
                        </div>
                    </div>

                </div>


                <!-- END checkout-body -->
                <!-- BEGIN checkout-footer -->

                <div class="checkout-footer" style="background: #000000;text-align: center;">
                    <a href="{{url('/edit_profile')}}" class="btn btn-lg" style="background: #fbdf36;color:#000;">Edit
                        Profile</a>
                    <a href="#modal-alert" data-toggle="modal" class="btn btn-lg"
                        style="background: #fbdf36;color:#000;">Reset Password</a>

                </div>
            </form>
                <div class="modal fade" id="modal-alert" style="top: 30%;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background: #333333;">
                            
                                
                            <div class="modal-header" style="background: #fbdf36;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" style="color:#000000">Reset Password</h4>
                            </div>
                            </br>
                            <form method="POST" 
                            class="form-horizontal"
                            action="{{ route('reset',['id'=>$user->id]) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="color:#ffffff">New Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control required" name="password"
                                        placeholder="New Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="color:#ffffff">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control required" name="password_confirmation"
                                        placeholder="Confirm Password" />
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-sm btn-white" data-dismiss="modal">Cancel</a>
                                <button type="submit" class="btn btn-sm "
                                    style="background: #fbdf36;color:#000000;"
                                     {{-- data-dismiss="modal" --}}
                                    >update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- END checkout-footer -->
        </div>
        <!-- END checkout -->

    </div>
    <!-- END container -->
</div>
<!-- END #checkout-payment -->


@include('/_fa')
@endsection