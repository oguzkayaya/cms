@extends('layouts.app')
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Blog Kategori Listesi</h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Kategori id</th>
                                    <th scope="col">Başlık</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Açıklama</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>
                                        <td>{{$value['id']}}</td>
                                        <td>{{$value['baslik']}}</td>
                                        <td>{{$value['link']}}</td>
                                        <td>{{$value['aciklama']}}</td>
                                        <td><a href="{{route('admin.blogkategori.edit',['id'=>$value['id']])}}">Düzenle</td>                                   
                                        <td><a href="{{route('admin.blogkategori.delete',['id'=>$value['id']])}}">Sil</td>
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

            