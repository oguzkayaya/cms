@extends('layouts.app')
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Slider Listesi</h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Başlık</th>
                                    <th scope="col">İçerik</th>
                                    <th scope="col">Resim</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>
                                        <td>{{$value['baslik']}}</td>
                                        <td>{{$value['icerik']}}</td>
                                        <td><img src="{{asset($value['image'])}}" style="width:120px;height:120px;" alt=""></td>
                                        <td><a href="{{route('admin.slider.edit',['id'=>$value['id']])}}">Düzenle</td>                                   
                                        <td><a href="{{route('admin.slider.delete',['id'=>$value['id']])}}">Sil</td>
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

            