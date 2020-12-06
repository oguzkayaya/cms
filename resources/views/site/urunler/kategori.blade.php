@extends('layouts.site')
@section('seo')
<meta name="description" content="{{$data[0]['aciklama']}}">
<meta name="keywords" content="{{$data[0]['anahtar_kelime']}}">
<title>{{$data[0]['baslik']}}</title>
@endsection 
@section('content')

<section class="blog-section bg-grey padding">
    <div class="container">
        <div class="row right-sidebar">
            <div class="col-lg-9 xs-padding">
                <div class="blog-items row">
                    @foreach ($data as $key=>$value)
                    <div class="col-sm-6 padding-15">
                        <div class="blog-post">
                            <a href="{{route('site.urunler.view',['link'=>$value['link']])}}"> <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}"></a>
                            <div class="blog-content">
                                <h3 style="font-size: 16px;
                                color: #000;
                                text-transform: uppercase;
                                font-family: 'BreeSerif-Regular';"><a href="#">{{$value['baslik']}}</a></h3>
                                <span  style="font-size: 25px;
                                color: #999;
                                text-transform: uppercase;
                                margin-top:15px;
                                font-family: 'BreeSerif-Regular';"
                                >{{$value['fiyat']}} ₺</span><br>
                            <a href="{{route('site.urunler.view',['link'=>$value['link']])}}" class="post-meta">Devamı</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    @endforeach
                </div>
            </div><!-- Blog Posts -->
        </div>
    </div>
</section>
@endsection