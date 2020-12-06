@extends('layouts.site')
@section('seo')
<meta name="description" content="{{$data[0]['aciklama']}}">
<meta name="keywords" content="{{$data[0]['anahtar_kelime']}}">
<title>{{$data[0]['baslik']}}</title>
@endsection 
@section('content')
<div class="about-inner bg-grey bd-bottom padding">
    <div class="container" >
        <div class="row about-inner-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-inner-content" >
                    <h2>{{$data[0]['name']}}</h2>
                    {!!$data[0]['icerik'] !!}
                    
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-inner-bg">
                    <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div><!-- /About Section -->
@endsection