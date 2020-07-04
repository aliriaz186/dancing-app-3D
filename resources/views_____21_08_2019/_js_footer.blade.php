
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
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

</script>