 @extends('main')


 @section('content')


 <!-- BEGIN #page-header -->

 <!-- BEGIN #about-us-cover -->
 <div id="about-us-cover" class="has-bg section-container">
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
             <li class="active">Section</li>
         </ul>
         <!-- END breadcrumb -->
         <!-- BEGIN about-us -->
         <div class="about-us text-center" style="padding: 0px 0;">
             <h2>Section</h2>

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
             <hr />
             <div class="row">
                 @if(Auth::check())
                 <div class="col-md-12">

                     <table id="data-table" class="table table-bordered" style="background: #333333">

                         <thead>
                             <tr>
                                 <th style="color:#fbdf36;">Sr#</th>
                                 <th style="color:#fbdf36;">Section</th>
                                 <th style="color:#fbdf36;">Videos</th>

                             </tr>
                         </thead>
                         <tbody>
                             {{-- {{ $sections }} --}}
                             {{-- {{ $videos }} --}}
                             @if(isset($sections))
                             @foreach ($sections as $section)


                             <tr class="odd gradeX">
                                 <td style="color:#fbdf36;">{{ $section->id }}</td>
                                 <td><a href="{{url('/lessons',['id'=>$section->id])}}"
                                         style="color:#ffffff;">{{ $section->section_name }}</a></td>
                                 <td align='center' style="color:#fbdf36;">
                                     {{ $section->videos->count() }}

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
                 @endif
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