@extends('layouts.site')
@section('seo')
<meta name="description" content="{{$data[0]['aciklama']}}">
<meta name="keywords" content="{{$data[0]['anahtar_kelime']}}">
<title>{{$data[0]['baslik']}}</title>
@endsection 
@section('content')
    
<section class="blog-section bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 sm-padding">
                <div class="blog-items single-post row">
                    <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}" alt="">
                    <h2>{{$data[0]['baslik']}}</h2>
                    <div class="meta-info">
                        
                    </div><!-- Meta Info -->
                    <p>{!!$data[0]['icerik']!!}</p>
                    
                    
                    
                    <div class="comments-wrapper">
                        <h4>{{count($yorum)}} Yorum var</h4>
                        <ul id="comments-list" class="comments-list">
                            <li>
                                <div class="comment-main-level">
                                    @foreach($yorum as $key => $value)
                                    <!-- Avatar -->
                                    <div class="comment-avatar" > <img src="{{asset('site/img/profil.png')}}"alt="comment" ></div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name"><a href="{{$value['website']}}">{{$value['name']}}</a></h6>
                                            <span>{{$value['created_at']}}</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                            {{$value['mesaj']}}
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                                <!-- Respuestas de los comentarios -->
                                
                                <ul class="comments-list reply-list">
                                    <!-- <li>
                                        
                                        <div class="comment-avatar"> <img src="img/comment-3.jpg" alt="comment"> </div>
                                        
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                <span>hace 10 minutos</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </li>-->
                                </ul>
                            </li>
                        </ul>
                        <div class="comment-form">
                            <h4>Yorum yap</h4>
                        <form action="{{route('site.blog.yorum',['link'=>$link])}}" method="post"  class="form-horizontal">
                                @csrf
                                <div class="form-group colum-row row">
                                    <div class="col-sm-4">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="İsim" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" >
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="website" id="website" name="website" class="form-control" placeholder="Websitesi" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="mesaj" cols="30" rows="5" class="form-control message" placeholder="Mesaj" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button id="submit" class="default-btn" type="submit">Mesaj gönder</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                
            </div><!-- Blog Posts -->
            <div class="col-lg-3 sm-padding">
                <div class="sidebar-wrap">
                   @include('site.blog.sidebar')
                </div><!-- /Sidebar Wrapper -->
            </div>
        </div>
    </div>
</section><!-- /Blog Section -->
@endsection