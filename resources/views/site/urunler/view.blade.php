@extends('layouts.site')
@section('seo')
<meta name="description" content="{{$data[0]['aciklama']}}">
<meta name="keywords" content="{{$data[0]['anahtar_kelime']}}">
<title>{{$data[0]['baslik']}}</title>
@endsection 
@section('content')
    
<div class="about-inner bg-grey bd-bottom padding">
    <div class="container">
        <div class="row about-inner-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-inner-content">
                    @foreach ($data as $key => $value)
                    <h2>{{$value['baslik']}}</h2>
                    <h4 style="font-size: 25px;
                    color: #999;
                    text-transform: uppercase;
                    margin-top:15px;
                    font-family: 'BreeSerif-Regular';">{{$value['fiyat']}} ₺</h4>
                    <p>{!!$value['aciklama']!!}</p>
                    <a href="#" class="default-btn">Teklif Al</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-inner-bg">
                    <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div><!-- /About Section -->
@endsection