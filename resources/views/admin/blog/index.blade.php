@extends('layouts.app')
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Blog Listesi</h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Resim</th>   
                                    <th scope="col">Blog Adı </th>
                                    <th scope="col">Blog URL</th>
                                    <th scope="col">Blog Başlığı</th>
                                    <th scope="col">Açıklama</th>
                                    <th scope="col">Anahtar Kelime</th>
                                    <th scope="col">İçerik</th>
                                                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>
                                        <td><img src="{{asset($value['image'])}}" style="width:120px;height:120px;" alt=""></td>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['link']}}</td>
                                        <td>{{$value['baslik']}}</td>
                                        <td>{{$value['aciklama']}}</td>
                                        <td>{{$value['anahtar_kelime']}}</td>
                                        <td>{{$value['icerik']}}</td>
                                        <td><a href="{{route('admin.blog.edit',['id'=>$value['id']])}}">Düzenle</td>                                   
                                        <td><a href="{{route('admin.blog.delete',['id'=>$value['id']])}}">Sil</td>
                                        
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</main>

@endsection

            