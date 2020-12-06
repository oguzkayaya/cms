@extends('layouts.site')
@section('seo')
<meta name="description" content="">
<title>Blog</title>
@endsection 
@section('content')
<section class="blog-section bg-grey padding">
    <div class="container">
        <div class="row right-sidebar">
            <div class="col-lg-9 xs-padding">
                <div class="blog-items row">
                    @foreach ($posts as $key=>$value)
                    <div class="col-sm-6 padding-15">
                        <div class="blog-post">
                            <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i>{{$value['tarih']}}</span>
                                <h3><a href="{{route('site.blog.view',['link'=>$value['link']])}}">{{$value['baslik']}}</a></h3>
                                <p>{{$value['aciklama']}}</p>
                                <a href="{{route('site.blog.view',['link'=>$value['link']])}}" class="post-meta">Devamı</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    @endforeach
                </div>
                {!!$posts->links()!!}
            </div><!-- Blog Posts -->
            <div class="col-lg-3 xs-padding">
                   @include('site.blog.sidebar')
                </div>
        </div>
    </div>
</section>
@endsection