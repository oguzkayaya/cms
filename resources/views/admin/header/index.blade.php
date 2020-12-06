@extends('layouts.app')
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Header Listesi</h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Anasayfa Başlığı</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefon</th> 
                                    <th scope="col">Mesaj</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data[0]['anasayfa_baslik']}}</td>
                                    <td>{{$data[0]['email']}}</td>
                                    <td>{{$data[0]['telefon']}}</td>
                                    <td>{{$data[0]['baslik']}}</td>
                                    <td><a href="{{route('admin.header.edit',['id'=>$data[0]['id']])}}">Düzenle</td>                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</main>

@endsection

            