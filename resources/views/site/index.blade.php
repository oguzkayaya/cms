@extends('layouts.site')
@section('seo')
<meta name="description" content="">
@foreach (\App\Header::where('id',1)->get()  as $item)
<title>{{$item->anasayfa_baslik}}</title>
@endforeach
@endsection 
@section('content')
 <section class="slider-section">
    <div class="slider-wrapper">
        <div id="main-slider" class="nivoSlider">
            @foreach ($slider as $key=>$value)
            <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="" title="#slider-caption-{{$value['id']}}"/>
            @endforeach
        </div><!-- /#main-slider -->
        @foreach ($slider as $key=>$value)
        <div id="slider-caption-{{$value['id']}}" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                       <div class="slider-text">
                            <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">{{$value['baslik']}}</h1>
                            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">{{$value['icerik']}}</p>
                            <a href="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Resime git</a>
                        </div>
                   </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-1 -->
        @endforeach
    </div>
</section><!-- /#slider-Section -->

<section class="services-section bg-grey bd-bottom padding">
    <div class="container">
       <div class="section-heading text-center mb-40">
            <h4>Hizmetlerimiz</h4>
            <h2>Neler yapıyoruz?</h2>
        </div>
        <div class="row service-wrap">
            @foreach ($services as $key => $value)
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="service-box">
                    <div class="icon"><i class="{{$value['icon']}}"></i></div>
                    <div class="service-content">
                        <h3>{{$value['name']}}</h3>
                        <p>{{$value['aciklama']}}</p>
                    </div>
                </div>
            </div><!-- /Services 1 -->
            @endforeach
        </div>
    </div>
</section><!-- /Services Section -->

<section class="blog-section bd-bottom bg-grey padding">
        <div class="container">
            <div class="section-heading mb-40 text-center">
               <h4>Blog</h4>
               <h2>Rasgele Gönderiler</h2>
            </div>
            <div class="row">
            @foreach(\App\Blog::inRandomOrder('id')->get() as $key => $value)
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="blog-post">
                        <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="blog post">
                        <div class="blog-content">
                            <span class="date"><i class="fa fa-clock-o"></i>{{$value['tarih']}}</span>
                            <h3><a href="{{route('site.blog.view',['link'=>$value['link']])}}">{{$value['baslik']}}</a></h3>
                            <p>{!!\App\Helper\mHelper::split($value['icerik'],200)!!}</p>
                            <a href="{{route('site.blog.view',['link'=>$value['link']])}} "class="post-meta">Daha fazlası</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
            @endforeach    
            </div><!-- Blog Posts -->
        </div>
    </section><!-- Blog Section -->

<section class="pricing-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading mb-40 text-center">
           <h2>Ürünler</h2>
        </div>
        <div class="row pricing-wrap">
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="pricing-box text-center">
                    <div class="pricing-head">
                        @foreach (\App\Urunler::orderBy('id','asc')->get() as $key => $value)
                        <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="img">
                        <span>{{$value['baslik']}}</span>
                        <h2>{{$value['fiyat']}} ₺</h2>
                        @endforeach
                    </div>
                    <p>{!!\App\Helper\mHelper::split($value['aciklama'],200)!!}</p>
                    <div class="pricing-footer">
                        <a href="{{route('site.urunler.view',['link'=>$value['link']])}}" class="default-btn">Başlayın</a>
                    </div>
                </div>
            </div><!-- Pricing 1 -->
        </div>
    </div>
</section><!-- Pricing Section -->

<section class="request-section padding bd-bottom">
    <div class="container">
        <div class="row request-wrap">
            <div class="col-md-6">
                <div class="request-heading mb-40">
                   <h2>Teklif Al</h2>
                   <p>Danışmanlarımız Benzersiz Bir Bakış Açısı Getiren Uzmanlardır</p>
                </div>
                <form action="{{route('site.teklif')}}" method="post"  class="form-horizontal request-form">
                    @csrf
                    <div class="form-group colum-row row">
                        <div class="col-sm-6">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ad Soyad" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Konu" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea id="message" name="text" cols="30" rows="5" class="form-control message" placeholder="Mesajınız" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button id="submit" class="default-btn" type="submit">Teklif Al</button>
                        </div>
                    </div>
                    <div id="form-messages" class="alert" role="alert"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="request-bg"></div>
</section><!-- Request Section -->

<div class="sponsor-section bd-bottom">
    <div class="container">
        <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
            @foreach (\App\Referans::all() as $key  => $value)
            <li class="sponsor-item">
                <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="sponsor-image">
            </li>
            @endforeach
        </ul>
    </div>
</div><!-- ./Sponsor Section -->
@endsection
@section('footer')
    @if(session("swal"))
        <script>swal("{{session("swal")}}");</script>
    @endif
@endsection