@extends('main')

@section('content')

   <!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#">Home</a></li>
            <li class="active">Guide Tour</li>
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


@include('/_fa')
@endsection