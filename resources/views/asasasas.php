 @extends('main')


@section('content')


        <!-- BEGIN #page-header -->
        
        <!-- BEGIN #about-us-cover -->
        <div id="about-us-cover" class="has-bg section-container">
            <!-- BEGIN cover-bg -->
            <div class="cover-bg">
                <img src="{{asset('img/slider-3-cover.jpg')}}" alt="" />
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
                <div class="about-us text-center">
                    <h1>Lessons</h1>
                    <p>
                     Learn dancing step by step by watching these lessons .
                    </p>
                </div>
                <!-- END about-us -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #about-us-cover -->
        
        <!-- BEGIN #about-us-content -->
        <div id="about-us-content" class="section-container" style="background:#333333;">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN about-us-content -->
                <div class="about-us-content">
                    <!-- BEGIN row -->
                    <hr />
                    <div class="row">
                       <div class="col-md-6">
                        
                        <table id="data-table" class="table table-bordered" style="margin-left: 50%;background: #000000">
                             
                            <thead>
                                    <tr>
                                    	<th>Sr#</th>
                                        <th>Lessons</th>
                                        <th>No# of Videos</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td><a href="{{url('/lessons')}}">Lesson No# 1</a></td>
                                        <td align='center'>9</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td><a href="{{url('/lessons')}}">Lesson No# 2</a></td>
                                        <td align='center'>24</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>3</td>
                                        <td><a href="{{url('/lessons')}}">Lesson No# 3</a></td>
                                        <td align='center'>10</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>4</td>
                                        <td ><a href="{{url('/lessons')}}">Lesson No# 4</a></td>
                                        <td align='center'>14</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>5</td>
                                        <td><a href="{{url('/lessons')}}">Lesson No# 5</a></td>
                                        <td align='center'>15</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>6</td>
                                        <td><a href="{{url('/lessons')}}">Lesson No# 6</a></td>
                                        <td align='center'>20</td>
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