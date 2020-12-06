@extends('layouts.app')
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Yorum Listesi</h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Adı</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Website</th>   
                                    <th scope="col">Mesaj</th>                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['email']}}</td>
                                        <td>{{$value['website']}}</td>
                                        <td>{{$value['mesaj']}}</td>
                                        <td><a href="{{route('admin.yorum.answer',['id'=>$value['id']])}}">Cevapla</td>                                   
                                        <td><a href="{{route('admin.yorum.delete',['id'=>$value['id']])}}">Sil</td>
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

            