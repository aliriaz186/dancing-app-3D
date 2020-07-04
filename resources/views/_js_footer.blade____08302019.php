
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- <script src="{{ asset('bootstrap-tour/build/js/jquery.min.js') }}"></script> -->
    <script src="{{ asset('bootstrap-tour/build/js/bootstrap-tour-standalone.min.js') }}"></script>
    <!-- <script src="{{ asset('bootstrap-tour/build/js/jquery.min.js') }}"></script> -->
    <!-- <script src="{{ asset('bootstrap-tour/build/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
        <script>
                $(window).scroll(function() {    
                var scroll = $(window).scrollTop();

                if (scroll > 5) {
                    $(".sticy-header").addClass("fixed-top");
                } else {
                    $(".sticy-header").removeClass("fixed-top");
                }
            });
    
</script>
<script>
    function url() {
    location = "{{url('/side_view')}}";
}</script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
	<script src="{{ asset('js/apps.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

  $(function(){
  var $start=$('.start'), 
  tour=new Tour({
    onStart:function(){
      $start.addClass('disabled',true);
    },
    onEnd:function(){
      $start.removeClass('disabled',true);
    }});
  tour.addStep({
    backdrop: true,
    element:'#my-element',
    placement:"bottom",
    title:"this is guide tour for dance moves",
    content:"this will contain all basic information"});
  tour.addStep({
    backdrop: true,
    element:"#usage",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
  tour.start();
  $('#my-element').mouseover(function(){
     tour.restart();
  });
  
  if(tour.ended()){$('<div class="alert">'+'<button class="close" data-dismiss="alert">&times;</button>'+'You ended the demo tour. <a href="#" class="start">Restart the demo tour.</a>'+'</div>').prependTo('.content').alert();}
$(document).on('click','.start:not(.disabled)',function(e){e.preventDefault();tour.restart();$('.alert').alert('close');});});

</script>