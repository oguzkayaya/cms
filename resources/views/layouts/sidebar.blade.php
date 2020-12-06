<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{route('admin.index')}}">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo"><img src="{{asset('assets/static/images/theadam.png')}}" alt=""></div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Admin</h5></div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active"><a class="sidebar-link" href="index.html"><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Dashboard</span></a></li>
          
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-purple-500 ti-map"></i> </span><span class="title">Slider</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{route('admin.slider.index')}}">Slider Listesi</a></li>
                    <li><a class="sidebar-link" href="{{route('admin.slider.create')}}">Slider Ekle</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Sayfalar</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{route('admin.sayfa.index')}}">Sayfa Listesi</a></li>
                    <li><a class="sidebar-link" href="{{route('admin.sayfa.create')}}">Sayfa Ekle</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span><span class="title">Servisler</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{route('admin.services.index')}}">Servis Listesi</a></li>
                    <li><a class="sidebar-link" href="{{route('admin.services.create')}}">Servis Ekle</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i> </span><span class="title">Blog </span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                        <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span><span class="title">Blog Kategori</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="sidebar-link" href="{{route('admin.blogkategori.index')}}">Blog Kategori Listesi</a></li>
                                <li><a class="sidebar-link" href="{{route('admin.blogkategori.create')}}">Blog Kategori Ekle</a></li>
                            </ul>
                        </li>
                    <li><a class="sidebar-link" href="{{route('admin.blog.index')}}">Blog Listesi</a></li>
                    <li><a class="sidebar-link" href="{{route('admin.blog.create')}}">Blog Ekle</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-deep-orange-500 ti-calendar"></i> </span><span class="title">Ürünler</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                        <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span><span class="title">Ürün Kategori</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="sidebar-link" href="{{route('admin.urunkategori.index')}}">Ürün Kategori Listesi</a></li>
                            <li><a class="sidebar-link" href="{{route('admin.urunkategori.create')}}">Ürün Kategori Ekle</a></li>
                        </ul>
                        </li>
                    <li><a class="sidebar-link" href="{{route('admin.urunler.index')}}">Ürün Listesi</a></li>
                    <li><a class="sidebar-link" href="{{route('admin.urunler.create')}}">Ürün Ekle</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-brown-500 ti-email"></i> </span><span class="title">Referanslar</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{route('admin.referans.index')}}">Referans Listesi</a></li>
                    <li><a class="sidebar-link" href="{{route('admin.referans.create')}}">Referans Ekle</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-deep-purple-500 ti-comment-alt"></i> </span><span class="title">Yorumlar</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{route('admin.yorum.index')}}">Yorum Listesi</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-pink-500 ti-palette"></i> </span><span class="title">Görünüm</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{route('admin.footer.index')}}">Footer</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{route('admin.header.index')}}">Header</a></li>
                </ul>
            </li>
           
        </ul>
        
    </div>
</div>