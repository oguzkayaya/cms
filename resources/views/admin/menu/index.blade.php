@extends('layouts.app')
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Menu Listesi</h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Başlık</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>
                                        <td>{{$value['baslik']}}</td>
                                        <td>{{$value['link']}}</td>
                                        <td><a href="{{route('admin.menu.edit',['id'=>$value['id']])}}">Düzenle</td>                                   
                                        <td><a href="{{route('admin.menu.delete',['id'=>$value['id']])}}">Sil</td>
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

            