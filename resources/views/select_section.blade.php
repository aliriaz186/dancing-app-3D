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
                    <li class="active">Section</li>
                </ul>
                <!-- END breadcrumb -->
                <!-- BEGIN about-us -->
                <div class="about-us text-center">
                    <h1>Section</h1>
                    <p>
                     Learn dancing step by step by watching these Sections .
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
                                    	<th style="color:#fbdf36;">Sr#</th>
                                        <th style="color:#fbdf36;">Section</th>
                                         <th style="color:#fbdf36;">Videos</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;">1</td>
                                        <td><a href="{{url('/lessons')}}" style="color:#ffffff;">Section No# 1</a></td>
                                        <td align='center' style="color:#fbdf36;">6</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;">2</td>
                                        <td><a href="{{url('/lessons')}}" style="color:#ffffff;">Section No# 2</a></td>
                                        <td align='center' style="color:#fbdf36;">10</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;">3</td>
                                        <td><a href="{{url('/lessons')}}" style="color:#ffffff;">Section No# 3</a></td>
                                        <td align='center' style="color:#fbdf36;">11</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;">4</td>
                                        <td ><a href="{{url('/lessons')}}" style="color:#ffffff;">Section No# 4</a></td>
                                        <td align='center' style="color:#fbdf36;">9</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;">5</td>
                                        <td><a href="{{url('/lessons')}}" style="color:#ffffff;">Section No# 5</a></td>
                                        <td align='center' style="color:#fbdf36;">8</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;">6</td>
                                        <td><a href="{{url('/lessons')}}" style="color:#ffffff;">Section No# 6</a></td>
                                        <td align='center' style="color:#fbdf36;">7</td>
                                    </tr>
                                    
                                </tbody>
                                
                            </table>
                        
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