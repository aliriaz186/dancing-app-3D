@extends('main')

@section('content')

   <!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#">Home</a></li>
            <li class="active">Dance Chart</li>
        </ul>
        <!-- END breadcrumb -->
        <!-- BEGIN account-container -->
        <div class="account-container">
            <!-- BEGIN account-sidebar -->
            <div class="account-sidebar">
                <div class="account-sidebar-cover">
                    <img src="{{asset('img/dance_img/guide_image.jpg')}}" alt="" />
                </div>

            </div>
            <!-- END account-sidebar -->
            <!-- BEGIN account-body -->
            <div class="account-body">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        
                        <table id="data-table" class="table table-striped table-bordered">
                                
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">A</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">B</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">C</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">D</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">E</a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">F</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">G</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">H</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">I</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">J</a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">K</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">L</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">M</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">N</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">O</a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">P</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">Q</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">R</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">S</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">T</a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">U</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">V</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">W</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">X</a></td>
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">Y</a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td align='center'><a href="#modal-alert"  data-toggle="modal">Z</a></td>
                                        <td align='center'></td>
                                        <td align='center'></td>
                                        <td align='center'></td>
                                        <td align='center'></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        
                    </div>
                    <!-- END col-6 -->
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
            </div>
            <!-- END account-body -->
        </div>
        <!-- END account-container -->
    </div>
    <!-- END container -->
</div>
<!-- END #about-us-cover -->


@include('/_fa')
@endsection