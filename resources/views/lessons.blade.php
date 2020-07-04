@extends('main')

@section('content')

   <!-- BEGIN #my-account -->
<div id="about-us-cover" class="section-container" style="background:#010101;">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN breadcrumb -->
        <ul class="breadcrumb m-b-10 f-s-12">
            <li><a href="#" style="color:#ffffff;">Home</a></li>
            <li><a href="#" style="color:#ffffff;">Guide Tour</a></li>
            <li class="active" style="color:#ffffff;">Lesson# 1<li>
        </ul>
        <!-- END breadcrumb -->
        <!-- BEGIN account-container -->
        <div class="account-container" style="background:#333333;">
            <!-- BEGIN account-sidebar -->
            
                <div class="row">
                    <!-- BEGIN col-6 -->
                    @if(Auth::check())
                    <div class="col-md-12">
                        <h3 align='center' style="color:#ffffff;">Lesson # 1</h3>
                        <table id="data-table" class="table table-bordered" style="background:#333333;">
                                <thead>
                                    <tr>
                                    	<th style="color:#fbdf36;">Sr#</th>
                                        <th style="color:#fbdf36;">Videos</th>
                                        <th style="color:#fbdf36;">Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($videos))
                                    @foreach ($videos as $video)
                                    <tr class="odd gradeX">
                                        <td style="color:#fbdf36;">{{ $video->id }}</td>
                                        <td>
                                        <video width="300" value="URL()" onclick="url()">
                                        <source src="{{asset($video->video_path)}}" type="video/mp4">
                                      </video>
                                      {{ $video->video_path }}
                                        </td>
                                        <td align='center' style="color:#fbdf36;">
                                            
                                            <p>Bille Jean</p>
                                            <p> 00:05:04:12</p>
                                        </td>
                                    </tr> 
                                    @endforeach    
                                    @endif
                                </tbody>
                            </table>
                        
                    </div>
                                                @else
                            <table id="data-table" class="table table-bordered" style="background: #333333">
                             
                            <thead>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                    <td style="color:white">
                                    You are Not Authorize Please Login first    
                                </td>
                                    </tr>
                                </tbody>
                                
                            </table>

                    <!-- END col-6 -->
                    @endif
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