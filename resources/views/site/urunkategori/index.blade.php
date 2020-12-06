@extends('layouts.site')
@section('seo')
<meta name="description" content="">
<title>Ürünler</title>
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
                                <a href="{{route('site.urunler.kategori',['id'=>$value['id']])}}"><img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="blog post"></a>
                        </div>
                    </div><!-- Post 1 -->
                    @endforeach
                </div>
            </div><!-- Blog Posts -->
        </div>
    </div>
</section>
@endsection