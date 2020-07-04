@extends('main')

@section('content')



        <!-- BEGIN #checkout-payment -->
        <div class="section-container" id="checkout-payment">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN checkout -->
                <div class="checkout">
                    <form class="form-horizontal">
                        <!-- BEGIN checkout-header -->
                        <div class="checkout-header" style="background: #fbdf36;">
                            <h3 style="color:#000000;text-align: center;">Edit Profile</h3>
                        </div>
                        <!-- END checkout-header -->
                        <!-- BEGIN checkout-body -->
                        <div class="checkout-body">
						
                           <div class="form-group">
                               <div align="center" >

                                {{ $users }}
                                 <img style="border-radius: 50%;" src="{{asset('img/user-2.jpg')}}">
                               </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Name <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control required" name="name" placeholder="Enter Name" value="Kashif" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email<span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="email" class="form-control required" name="email" placeholder="Enter Email" value="example@example.com" />
                                </div>
                            </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label">Country<span class="text-danger">*</span></label>
                               <div class="col-md-4">
                                    <select class="form-control"  name="selectBox" data-parsley-required="true">
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
                                    <input type="text" class="form-control required" name="city" placeholder="Enter City" value="Lahore" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control required" name="gender" placeholder="Enter Gender" value="Male" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Date of Birth <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control required" name="dob" placeholder="" value="03-08-2019"/>
                                </div>
                            </div>
                                                        
                        </div>
                        <!-- END checkout-body -->
                        <!-- BEGIN checkout-footer -->
                        
                        <div class="checkout-footer" style="background: #000000;text-align: center;">
                            <button type="submit" class="btn btn-lg" style="background: #fbdf36;color:#000;" >Save</button>
                            
                        </div>
                        
                        <!-- END checkout-footer -->
                    </form>
                </div>
                <!-- END checkout -->

            </div>
            <!-- END container -->
        </div>
        <!-- END #checkout-payment -->


@include('/_fa')
@endsection