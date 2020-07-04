
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo e(asset('plugins/jquery/jquery-1.9.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/jquery/jquery-migrate-1.1.0.min.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- <script src="<?php echo e(asset('bootstrap-tour/build/js/jquery.min.js')); ?>"></script> -->
    <script src="<?php echo e(asset('bootstrap-tour/build/js/bootstrap-tour-standalone.min.js')); ?>"></script>
    <!-- <script src="<?php echo e(asset('bootstrap-tour/build/js/jquery.min.js')); ?>"></script> -->
    <!-- <script src="<?php echo e(asset('bootstrap-tour/build/js/bootstrap.min.js')); ?>"></script> -->
    <script src="<?php echo e(asset('bootstrap-tour/build/js/bootstrap-tour.min.js')); ?>"></script>
	

	
	<!--     TExt to Speech -->
	<!--     TExt to Speech -->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.95.1/js/materialize.min.js"></script>
<script>
$(function(){
  if ('speechSynthesis' in window) {
    speechSynthesis.onvoiceschanged = function() {
      var $voicelist = $('#voices');

      if($voicelist.find('option').length == 0) {
        speechSynthesis.getVoices().forEach(function(voice, index) {
          var $option = $('<option>')
          .val(index)
          .html(voice.name + (voice.default ? ' (default)' :''));

          $voicelist.append($option);
        });

        $voicelist.material_select();
      }
    }

    $('#speak').click(function(){
      var text = $('#message').val();
      var msg = new SpeechSynthesisUtterance();
      var voices = window.speechSynthesis.getVoices();
      msg.voice = voices[$('#voices').val()];
      msg.rate = $('#rate').val() / 10;
      msg.pitch = $('#pitch').val();
      msg.text = text;

      msg.onend = function(e) {
        console.log('Finished in ' + event.elapsedTime + ' seconds.');
      };

      speechSynthesis.speak(msg);
    })

      $('#speak2').click(function(){
          var text2 = $('#message2').val();
          var msg2 = new SpeechSynthesisUtterance();
          var voices2 = window.speechSynthesis.getVoices();
          msg2.voice = voices2[$('#voices').val()];
          msg2.rate = $('#rate').val() / 10;
          msg2.pitch = $('#pitch').val();
          msg2.text = text2;

          msg2.onend = function(e) {
              console.log('Finished in ' + event.elapsedTime + ' seconds.');
          };

          speechSynthesis.speak(msg2);
      })

      $('#speak3').click(function(){
          var text3 = $('#message3').val();
          var msg3 = new SpeechSynthesisUtterance();
          var voices3 = window.speechSynthesis.getVoices();
          msg3.voice = voices3[$('#voices').val()];
          msg3.rate = $('#rate').val() / 10;
          msg3.pitch = $('#pitch').val();
          msg3.text = text3;

          msg3.onend = function(e) {
              console.log('Finished in ' + event.elapsedTime + ' seconds.');
          };

          speechSynthesis.speak(msg3);
      })

      $('#speak4').click(function(){
          var text4 = $('#message4').val();
          var msg4 = new SpeechSynthesisUtterance();
          var voices4 = window.speechSynthesis.getVoices();
          msg4.voice = voices4[$('#voices').val()];
          msg4.rate = $('#rate').val() / 10;
          msg4.pitch = $('#pitch').val();
          msg4.text = text4;

          msg4.onend = function(e) {
              console.log('Finished in ' + event.elapsedTime + ' seconds.');
          };

          speechSynthesis.speak(msg4);
      })

      $('#speak5').click(function(){
          var text5 = $('#message5').val();
          var msg5 = new SpeechSynthesisUtterance();
          var voices5 = window.speechSynthesis.getVoices();
          msg5.voice = voices5[$('#voices').val()];
          msg5.rate = $('#rate').val() / 10;
          msg5.pitch = $('#pitch').val();
          msg5.text = text5;

          msg5.onend = function(e) {
              console.log('Finished in ' + event.elapsedTime + ' seconds.');
          };

          speechSynthesis.speak(msg5);
      })

  }
});

</script>
<!--     TExt to Speech END -->	
<!--     TExt to Speech END -->

	<!-- Dimmer For Side View  -->
	<!-- Dimmer For Side View  -->

	<script>
        $(window).load(function(e){
            $('#speak').on('click',function(e){
                $("#page-cover").css("opacity",0.6).fadeIn(300, function () {
                    $('#red').css({'position':'inherit','z-index':9999});
                });
                e.preventDefault();
                setTimeout(function(){ $('#page-cover').fadeOut() }, 10000);
            });

        });


        $(window).load(function(e){
            $('#speak2').on('click',function(e){
                $("#page-cover2").css("opacity",0.6).fadeIn(300, function () {
                    $('#red2').css({'position':'inherit','z-index':9999});
                });
                e.preventDefault();
                setTimeout(function(){ $('#page-cover2').fadeOut() }, 10000);
            });

        });


        $(window).load(function(e){
            $('#speak3').on('click',function(e){
                $("#page-cover3").css("opacity",0.6).fadeIn(300, function () {
                    $('#red3').css({'position':'inherit','z-index':9999});
                });
                e.preventDefault();
                setTimeout(function(){ $('#page-cover3').fadeOut() }, 10000);
            });
        });


        $(window).load(function(e){
            $('#speak4').on('click',function(e){
                $("#page-cover4").css("opacity",0.6).fadeIn(300, function () {
                    $('#red4').css({'position':'inherit','z-index':9999});
                });
                e.preventDefault();
                setTimeout(function(){ $('#page-cover4').fadeOut() }, 10000);
            });
        });


        $(window).load(function(e){
            $('#speak5').on('click',function(e){
                $("#page-cover5").css("opacity",0.6).fadeIn(300, function () {
                    $('#red5').css({'position':'inherit','z-index':9999});
                });
                e.preventDefault();
                setTimeout(function(){ $('#page-cover5').fadeOut() }, 10000);
            });
        });

	</script>

	<!-- Dimmer For Side View END  -->
	<!-- Dimmer For Side View END  -->


	<script>
	var content = $('#content');
content.css('list-style-type', 'none');
content.wrap('<div id="wrapper"></div>');

var wrapper = $('#wrapper');
wrapper.append('<button id="previous" class="w3-button w3-yellow pull-left" >Previous</button><button id="next" class="w3-button w3-yellow pull-right">Next</button>');

$('#previous').hide();

var liElements = content.children();
liElements.hide();
liElements.first().show();

var liElementCount = liElements.length;

if (liElementCount > 0) {
    var counter = 0;

    function swapContent() {
        if (counter == 0) {
            $('#previous').hide();
        } else {
            $('#previous').show();
        }

        if (counter == liElementCount - 1) {
            $('#next').hide();
        } else {
            $('#next').show();
        }

        liElements.hide();
        $(liElements.get(counter)).show();
    }

    $('#next').click(function () {
        counter++;
        swapContent();
    });

    $('#previous').click(function () {
        counter--;
        swapContent();
    });
}

var content2 = $('#content2');
content2.css('list-style-type', 'none');
content2.wrap('<div id="wrapper2"></div>');

var wrapper2 = $('#wrapper2');
wrapper2.append('<button id="previous2" class="w3-button w3-yellow pull-left" >Previous</button><button id="next2" class="w3-button w3-yellow pull-right">Next</button>');

$('#previous2').hide();

var liElements2 = content2.children();
liElements2.hide();
liElements2.first().show();

var liElementCount2 = liElements2.length;

if (liElementCount2 > 0) {
    var counter2 = 0;

    function swapContent2() {
        if (counter2 == 0) {
            $('#previous2').hide();
        } else {
            $('#previous2').show();
        }

        if (counter2 == liElementCount2 - 1) {
            $('#next2').hide();
        } else {
            $('#next2').show();
        }

        liElements2.hide();
        $(liElements2.get(counter2)).show();
    }

    $('#next2').click(function () {
        counter2++;
        swapContent2();
    });

    $('#previous2').click(function () {
        counter2--;
        swapContent2();
    });
}

var content3 = $('#content3');
content3.css('list-style-type', 'none');
content3.wrap('<div id="wrapper3"></div>');

var wrapper3 = $('#wrapper3');
wrapper3.append('<button id="previous3" class="w3-button w3-yellow pull-left" >Previous</button><button id="next3" class="w3-button w3-yellow pull-right">Next</button>');

$('#previous3').hide();

var liElements3 = content3.children();
liElements3.hide();
liElements3.first().show();

var liElementCount3 = liElements3.length;

if (liElementCount3 > 0) {
    var counter3 = 0;

    function swapContent3() {
        if (counter3 == 0) {
            $('#previous3').hide();
        } else {
            $('#previous3').show();
        }

        if (counter3 == liElementCount3 - 1) {
            $('#next3').hide();
        } else {
            $('#next3').show();
        }

        liElements3.hide();
        $(liElements3.get(counter3)).show();
    }

    $('#next3').click(function () {
        counter3++;
        swapContent3();
    });

    $('#previous3').click(function () {
        counter3--;
        swapContent3();
    });
}

var content4 = $('#content4');
content4.css('list-style-type', 'none');
content4.wrap('<div id="wrapper4"></div>');

var wrapper4 = $('#wrapper4');
wrapper4.append('<button id="previous4" class="w3-button w3-yellow pull-left" >Previous</button><button id="next4" class="w3-button w3-yellow pull-right">Next</button>');

$('#previous4').hide();

var liElements4 = content4.children();
liElements4.hide();
liElements4.first().show();

var liElementCount4 = liElements4.length;

if (liElementCount4 > 0) {
    var counter4 = 0;

    function swapContent4() {
        if (counter4 == 0) {
            $('#previous4').hide();
        } else {
            $('#previous4').show();
        }

        if (counter4 == liElementCount4 - 1) {
            $('#next4').hide();
        } else {
            $('#next4').show();
        }

        liElements4.hide();
        $(liElements4.get(counter4)).show();
    }

    $('#next4').click(function () {
        counter4++;
        swapContent4();
    });

    $('#previous4').click(function () {
        counter4--;
        swapContent4();
    });
}

var content5 = $('#content5');
content5.css('list-style-type', 'none');
content5.wrap('<div id="wrapper5"></div>');

var wrapper5 = $('#wrapper5');
wrapper5.append('<button id="previous5" class="w3-button w3-yellow pull-left" >Previous</button><button id="next5" class="w3-button w3-yellow pull-right">Next</button>');

$('#previous5').hide();

var liElements5 = content5.children();
liElements5.hide();
liElements5.first().show();

var liElementCount5 = liElements5.length;

if (liElementCount5 > 0) {
    var counter5 = 0;

    function swapContent5() {
        if (counter5 == 0) {
            $('#previous5').hide();
        } else {
            $('#previous5').show();
        }

        if (counter5 == liElementCount5 - 1) {
            $('#next5').hide();
        } else {
            $('#next5').show();
        }

        liElements5.hide();
        $(liElements5.get(counter5)).show();
    }

    $('#next5').click(function () {
        counter5++;
        swapContent5();
    });

    $('#previous5').click(function () {
        counter5--;
        swapContent5();
    });
}

	


	</script>
	
	
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
var width = 0;
var widthValue = 0;

function next() {
  var elem = document.getElementById("myBar");
  var widthAnim = widthValue;
  var id = setInterval(frame, 10);
  var widthIncrement = 10;

  widthValue = widthAnim + widthIncrement;

  function frame() {
    if (widthAnim >= widthValue || widthValue > 100) {
      clearInterval(id);
    } else {
      widthAnim++;
      elem.style.width = widthAnim + '%';
      elem.innerHTML = widthAnim * 1 + '%';
    }
  }
}

            </script>
<script>
    function url() {
    location = "<?php echo e(url('/side_view')); ?>";
}</script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo e(asset('plugins/jquery-cookie/jquery.cookie.js')); ?>"></script>
	<script src="<?php echo e(asset('js/apps.min.js')); ?>"></script>
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
    element:'#home',
    placement:"bottom",
    title:"this is guide tour for dance moves",
    content:"this will contain all basic information"});
  tour.addStep({
    backdrop: true,
    element:"#about",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
  tour.addStep({
    backdrop: true,
    element:"#dance_chart",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
  tour.addStep({
    backdrop: true,
    element:"#contact_us",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
  tour.addStep({
    backdrop: true,
    element:"#lesson",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
  tour.addStep({
    backdrop: true,
    element:"#support",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
  tour.addStep({
    backdrop: true,
    element:"#buy_1",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
  tour.addStep({
    backdrop: true,
    element:"#lesson_1",
    placement:"bottom",title:"dance chart contain dance steps",
    content:"this will contain all basic information.",
    options:{
      labels:{
        prev:"Go back",
        end:"Stop"
      }
    }
  });
   tour.addStep({
    backdrop: true,
    element:"#section",
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
  $('#guided_tour').click(function(){
     tour.restart();
  });
  
  if(tour.ended()){$('<div class="alert">'+'<button class="close" data-dismiss="alert">&times;</button>'+'You ended the demo tour. <a href="#" class="start">Restart the demo tour.</a>'+'</div>').prependTo('.content').alert();}
$(document).on('click','.start:not(.disabled)',function(e){e.preventDefault();tour.restart();$('.alert').alert('close');});});

</script><?php /**PATH C:\xampp\htdocs\dancing-app-3D\resources\views//_js_footer.blade.php ENDPATH**/ ?>