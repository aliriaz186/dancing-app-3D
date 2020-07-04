 @extends('main')


@section('content')


        <!-- BEGIN #page-header -->
        
        <!-- BEGIN #about-us-cover -->
        <div id="about-us-cover" class="has-bg section-container" >
            <!-- BEGIN cover-bg -->
            <div class="cover-bg">
                <img src="{{asset('img/slider-3-cover.jpg')}}" alt="" style="width: 100%;height: auto;" />
            </div>
            <!-- END cover-bg -->
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN breadcrumb -->
                <ul class="breadcrumb m-b-10 f-s-12">
                    <li><a href="#">Home</a></li>
                    <li class="active">Dance Chart</li>
                </ul>
                <!-- END breadcrumb -->
                <!-- BEGIN about-us -->
                <div class="about-us text-center" style="padding: 0px 0;">
                    <h2>Dance Chart</h2>

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
                    <div style="background: #333333" class="row">
                        <div  class="col-md-12" style="text-align: center;">                            
                            <a href="#" role="button" class="btn btn-primary">song1</a>
                            <a href="#" role="button" class="btn btn-primary">song2</a>
                            <a href="#" role="button" class="btn btn-primary">song3</a>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>                        
                    <hr />
                    <div style="background-color: #010101" class="row">
                        <div  class="col-md-12">
                            <div  class="col-md-4">
                            <span style="color: #fbdf36;"><strong>Video Type:</strong></span>
                                <a href="#" role="button" class="btn btn-primary">Real</a>
                                <a href="#" style="margin-left: 10px;" role="button" class="btn btn-info">Animation</a>
                            </div>
                            <div  class="col-md-4">
                            <span style="color: #fbdf36;margin-left: 10px;"><strong>Face View:</strong></span>
                                <a href="#" role="button" class="btn btn-primary">Side</a>
                                <a href="#" style="margin-left: 10px;" role="button" class="btn btn-info">Front</a>
                                </div>
                            <div  class="col-md-4">
                            <span style="color: #fbdf36;margin-left: 10px;"><strong>Speaker:</strong></span>
                                <a href="#" role="button" class="btn btn-primary">MI</a>
                                <a href="#" style="margin-left: 10px;" role="button" class="btn btn-info">Prince</a>
                                </div>
                            
                        </div>
                        
                    </div> 
                    <hr/>

                    <div class="row">
                       <div class="col-md-12">
                        
                        <table id="data-table" class="table table-bordered" style="background: #333333" >
                                
                                <tbody>
                                    <tr >
                                        <td align='center' ><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">A</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">B</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">C</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">D</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">E</a></td>
                                    </tr>
                                    <tr >
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">F</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">G</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">H</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">I</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">J</a></td>
                                    </tr>
                                    <tr >
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">K</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">L</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">M</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">N</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">O</a></td>
                                    </tr>
                                    <tr >
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">P</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">Q</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">R</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">S</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">T</a></td>
                                    </tr>
                                    <tr >
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">U</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">V</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">W</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">X</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">Y</a></td>
                                    </tr>
                                    <tr >
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal" style="color:#fbdf36;">Z</a></td>
                                        <td align='center'></td>
                                        <td align='center'></td>
                                        <td align='center'></td>
                                        <td align='center'></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        
                    </div>
            
                        <div class="modal fade" id="modal-alert">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Dance Video</h4>
                </div>
                <div class="modal-body">
                    
                                    <video width="400"  style="margin-left: 15%;" controls>
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                    
                </div>
                <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Exit</a>
                </div>
            </div>
    </div>
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
@include('/_fa')        
@endsection        