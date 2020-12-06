<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="tr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('seo')
		<!--<meta name="description" content="">
        <title>THE ADAM</title>-->

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Font Awesome Icons CSS -->
        <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="{{asset('site/css/themify-icons.css')}}">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="{{asset('site/css/elegant-font-icons.css')}}">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{asset('site/css/elegant-line-icons.css')}}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="{{asset('site/css/venobox/venobox.css')}}">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{asset('site/css/owl.carousel.css')}}">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{asset('site/css/slicknav.min.css')}}">
        <!-- Css Animation CSS -->
        <link rel="stylesheet" href="{{asset('site/css/css-animation.min.css')}}">
        <!-- Nivo Slider CSS -->
        <link rel="stylesheet" href="{{asset('site/css/nivo-slider.css')}}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('site/css/main.css')}}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">

        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->

        <header id="header" class="header-section">
            <div class="top-header">
                <div class="container">
                    <div class="top-content-wrap row">
                        <div class="col-md-8">
                            <ul class="left-info">
                                @foreach (\App\Header::where('id',1)->get() as $key => $value)
                                <li><a href="#"><i class="ti-email"></i>{{$value['email']}}
                                </a></li>
                                <li><a href="#"><i class="ti-mobile"></i>{{$value['telefon']}}</a></li>
                                <li>{{$value['baslik']}}</li>
                            </ul>
                            @endforeach
                        </div>
                        @auth
                            <div class="box">
                                    <a href="" style="color:white;padding:10px">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>                               
                            </div>
                            <div class="box">
                            <a onClick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}">Çıkış Yap</a>
                            <form action="{{route('logout')}}" method="POST" id="logout-form">
                                    {{ csrf_field() }}
                                </form>
                                
                            </div>
                        @endauth
                        
                        @guest
                        <div class="col-md-4 d-none d-md-block">
                            <ul class="right-info">
                                <li><a href="{{url('/register')}}">Kayıt ol</a></li>
                                <li><a href="{{route('login')}}">Giriş yap</a></li>
                            </ul>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="bottom-content-wrap row">
                        <div class="col-md-3">
                            <div class="site-branding">
                                <a href="{{route('site.index')}}"><img src="{{asset('site/img/theadam.png')}}" alt="Brand"></a>
                            </div>
                        </div>
                       <div class="col-md-9 d-none d-md-block text-right">
                           <ul id="mainmenu" class="nav navbar-nav nav-menu">
                                <li class="active"><a href="{{route('site.index')}}">Anasayfa</li>
                                
                                <li><a href="#">Hizmetlerimiz</a>
                                    <ul>
                                    @foreach (\App\Services::where('gorunum',1)->orderBy('id','asc')->get() as $key=>$value)
                                       <li><a href="{{route('site.services.index',['link'=>$value['link']])}}">{{$value['name']}}</a></li>
                                    @endforeach   
                                    </ul>
                                </li>
                                <li><a href="#">Sayfalar</a>
                                    <ul>
                                    @foreach (\App\Sayfa::where('gosterim',1)->orderBy('id','asc')->get() as $key=>$value)
                                       <li><a href="{{route('site.sayfa.index',['link'=>$value['link']])}}">{{$value['name']}}</a></li>
                                    @endforeach 
                                    </ul>
                                </li>
                                <li><a href="{{route('site.blog.index')}}">Blog</a>
                                </li>
                                <li> <a href="{{route('site.offer.index')}}">Teklif Al</a></li>
                                
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header Section -->

        <div class="header-height"></div>
        @yield('content')
        <section class="widget-section padding">
            <div class="container">
                <div class="widget-wrap row">
                    <div class="col-lg-3 col-md-6 col-sm-6 sm-padding">
                        <div class="widget-content">
                            @foreach (\App\FooterColumn::where('gorunum',1)->where('id','1')->get() as $key => $value)
                            <img src="{{asset($value['image'])}}" alt="logo">
                            <p>{{$value['aciklama']}}</p>
                            @endforeach
                            @foreach (\App\FooterColumn::where('gorunum',1)->where('id','3')->get() as $key => $value)
                            <ul class="social-icon">
                                <li><a href="{{$value['facebook']}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$value['twitter']}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$value['pinterest']}}"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="{{$value['instagram']}}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{$value['linkedin']}}"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 sm-padding">
                        <div class="widget-content">
                            <h3>Hakkında</h3>
                            <ul class="widget-link">
                                <li><a href="#">Biz Kimiz?</a></li>
                                <li><a href="{{route('site.blog.index')}}">Blog</a></li>
                                <li><a href="#">Bize Ulaşın!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 sm-padding">
                        <div class="widget-content">
                            <h3>Son Yazılar</h3>
                            @foreach (\App\Blog::orderBy('tarih','desc')->get() as $key => $value)
                            <ul class="widget-link">
                                <li><a href="{{route('site.blog.view',['link'=>$value['link']])}}">{{$value['baslik']}}</a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 sm-padding">
                            <div class="widget-content">
                                <h3>Hizmetlerimiz</h3>
                                @foreach (\App\Services::orderBy('created_at','desc')->get() as $key => $value)
                                <ul class="widget-link">
                                    <li><a href="{{route('site.services.index',['link'=>$value['link']])}}">{{$value['name']}}</a></li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    <div class="col-lg-2 col-sm-6 sm-padding">
                        <div class="widget-content">
                        @foreach (\App\FooterColumn::where('gorunum',1)->where('id','2')->get() as $key => $value)
                            <h3>{{$value['baslik']}}</h3>
                        <p>{!! $value['aciklama']!!}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-section">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 sm-padding">
                        <div class="copyright">&copy; THE ADAM 2019 <a href="https://www.theadam.com.tr/">Web Tasarım</a>Copyright All Rights Reserved</div>
                    </div>
                </div>
			</div>
		</footer><!-- /Footer Section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

		<!-- jQuery Lib -->
		<script src="{{asset('site/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('site/js/vendor/bootstrap.min.js')}}"></script>
		<!-- Tether JS -->
		<script src="{{asset('site/js/vendor/tether.min.js')}}"></script>
        <!-- Imagesloaded JS -->
        <script src="{{asset('site/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{asset('site/js/vendor/owl.carousel.min.js')}}"></script>
		<!-- isotope JS -->
		<script src="{{asset('site/js/vendor/jquery.isotope.v3.0.2.js')}}"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{asset('site/js/vendor/smooth-scroll.min.js')}}"></script>
		<!-- venobox JS -->
		<script src="{{asset('site/js/vendor/venobox.min.js')}}"></script>
        <!-- ajaxchimp JS -->
        <script src="{{asset('site/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Counterup JS -->
		<script src="{{asset('site/js/vendor/jquery.counterup.min.js')}}"></script>
        <!-- waypoints js -->
		<script src="{{asset('site/js/vendor/jquery.waypoints.v2.0.3.min.js')}}"></script>
        <!-- Slick Nav JS -->
        <script src="{{asset('site/js/vendor/jquery.slicknav.min.js')}}"></script>
        <!-- Nivo Slider JS -->
        <script src="{{asset('site/js/vendor/jquery.nivo.slider.pack.js')}}"></script>
        <!-- Wow JS -->
		<script src="{{asset('site/js/vendor/wow.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('site/js/contact.js')}}"></script>
		<!-- Main JS -->
        <script src="{{asset('site/js/main.js')}}"></script>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        @yield('footer')

    </body>
</html>
