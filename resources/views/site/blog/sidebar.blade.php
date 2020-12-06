<div class="sidebar-wrap">
    
    <div class="sidebar-widget mb-50">
        <h4>Kategoriler</h4>
        <ul class="cat-list">
            @foreach (\App\BlogKategori::all() as $key => $value)
            <li><a href="{{route('site.blog.kategori',['id'=>$value['id']])}}">{{$value['baslik']}}</a><span>({{\App\Blog::where('kategoriid','=',$value['id'])->count()}})</span></li>
            @endforeach
        </ul>
    </div><!-- Categories --> 
    <div class="sidebar-widget mb-50">
        <h4>Rasgele Gönderiler</h4>
        <ul class="recent-posts">
        @foreach (\App\Blog::inRandomOrder('id')->limit(5)->get() as $key => $value)
            <li>
                <img src="{{asset($value['image'])}}" alt="blog post">
                <div>
                    <h4><a href="{{route('site.blog.view',['link'=>$value['link']])}}">{{$value['baslik']}}</a></h4>
                    <span class="date"><i class="fa fa-clock-o"></i>{{$value['tarih']}}</span>   
                </div>                 
            </li>
        @endforeach
        </ul>
    </div><!-- Recent Posts -->
</div><!-- /Sidebar Wrapper -->