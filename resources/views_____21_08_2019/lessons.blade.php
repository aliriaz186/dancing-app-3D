@extends('main')

@section('content')

   <!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#">Home</a></li>
            <li><a href="#">Guide Tour</a></li>
            <li class="active">Lesson# 1<li>
        </ul>
        <!-- END breadcrumb -->
        <!-- BEGIN account-container -->
        <div class="account-container">
            <!-- BEGIN account-sidebar -->
            
                <div class="row">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-12">
                        <h3 align='center'>Lesson # 1</h3>
                        <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th>Sr#</th>
                                        <th>Videos</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>3</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>4</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>5</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>6</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>7</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>8</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>9</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset('videos/billie.mp4')}}" type="video/mp4">
                                      </video>
                                        </td>
                                        <td align='center'>
                                            <p>Michael Jackson</p>
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        
                    </div>
                    <!-- END col-6 -->
                </div>
                <!-- END row -->
        </div>
        <!-- END account-container -->
    </div>
    <!-- END container -->
</div>
<!-- END #about-us-cover -->


@include('/_fa')
@endsection