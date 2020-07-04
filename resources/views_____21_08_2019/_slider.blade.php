<!-- BEGIN #slider -->
<div id="slider" class="section-container p-0 bg-black-darker">
    <!-- BEGIN carousel -->
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <!-- BEGIN carousel-inner -->
        <div class="carousel-inner">
            <!-- BEGIN item -->
            <div class="item active">
                <img src="{{asset('img/dance_img/bbb.jpg')}}" class="bg-cover-img" alt="" />
                <div class="container">
                    <img src="{{asset('img/dance_img/slide2_dance.png')}}" class="product-img right bottom fadeInRight animated" alt="" />
                </div>
                <div class="container" style="margin-right: 0%;margin-top: 4%;">
                    <div class="carousel-caption carousel-caption-right">
                    <div class="price m-b-30 fadeInLeftBig animated" style="margin-right: 7%;margin-top: -5%;">Play Trailer</div>
                    </div>
                    <a href="https://www.youtube.com"  target="_blank"> <img src="{{asset('img/dance_img/play.png')}}" class="product-img right bottom fadeInRight animated" alt="" style="z-index: 100;"/></a>
                </div>
                <div class="carousel-caption carousel-caption-left">
                    <div class="container">
                        <h3 class="title m-b-5 fadeInLeftBig animated">Dance Moves</h3>
                        <p class="m-b-15 fadeInLeftBig animated">Sample Example.</p>
                        <div class="price m-b-30 fadeInLeftBig animated"><small>from</small> <span>Price $0.00</span></div>
                        <a href="#modal-alert" class="btn btn-outline btn-lg fadeInRightBig animated" data-toggle="modal">Buy Now</a>
                        <a href="{{ url('/guide') }}" class="btn btn-outline btn-lg fadeInLeftBig animated">Take Tour</a>
                    </div>
                </div>
            </div>
            <!-- END item -->
            <!-- BEGIN item -->
            <div class="item">
                <img src="{{asset('img/dance_img/life.jpg')}}" class="bg-cover-img" alt="" />
                <div class="container">
                    <img src="{{asset('img/dance_img/slide4_dance.png')}}" class="product-img left bottom fadeInLeft animated" alt="" />
                </div>
                <div class="carousel-caption carousel-caption-right">
                    <div class="container">
                        <h3 class="title m-b-5 fadeInRightBig animated">Dance Steps</h3>
                        <p class="m-b-15 fadeInRightBig animated">The only thing that’s changed is everything</p>
                        <div class="price m-b-30 fadeInRightBig animated"><small>from</small>  <span>Price $0.00</span></div>
                        <a href="#modal-alert" class="btn btn-outline btn-lg fadeInRightBig animated" data-toggle="modal">Buy Now</a>
                        
                        <a href="{{ url('/guide') }}" class="btn btn-outline btn-lg fadeInLeftBig animated">Take Tour</a>
                    </div>
                    
                </div>
            </div>
            <!-- END item -->
            <!-- BEGIN item -->
            <div class="item">
                <img src="{{asset('img/dance_img/Swirl.jpg')}}" class="bg-cover-img" alt="" />
                <div class="container">
                    <img src="{{asset('img/dance_img/slide3_dance.png')}}" class="product-img left bottom fadeInLeft animated" alt="" />
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <h3 class="title m-b-5 fadeInDownBig animated">Dance Spins</h3>
                        <p class="m-b-15 fadeInDownBig animated">Thin.Light.Powerful.<br />And ready for anything</p>
                        <div class="price fadeInDownBig animated"><small>from</small>  <span>Price $0.00</span></div>
                        <a href="#modal-alert" class="btn btn-outline btn-lg fadeInRightBig animated" data-toggle="modal">Buy Now</a>
                        <a href="{{ url('/guide') }}" class="btn btn-outline btn-lg fadeInLeftBig animated">Take Tour</a>
                    </div>
                </div>
            </div>
            <!-- END item -->
        </div>
        <!-- END carousel-inner -->
        <a class="left carousel-control" href="#main-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#main-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <!-- END carousel -->
</div>
<!-- END #slider -->



<div class="modal fade" id="modal-alert">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Payment Method</h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/dance_img/payment.png')}}" style="margin-left: 25%;"/>
                </div>
                <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                        <a href="javascript:;" class="btn btn-sm btn-success" data-dismiss="modal">Buy Now!</a>
                </div>
            </div>
    </div>
</div>