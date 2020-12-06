@extends('layouts.app')
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Footer Sütun Listesi</h4>
                        
                        <table class="table"><h5>Footer Sütun 1</h5><a href="{{route('admin.footer.edit',['id'=>$data[0]['id']])}}">Düzenle</a>
                            <thead>
                                <tr>
                                    <th scope="col">Başlık</th>
                                    <th scope="col">Resim</th> 
                                    <th scope="col">Açıklama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data[0]['baslik']}}</td>
                                    <td><img src="{{asset($data[0]['image'])}}" style="width:129px;height:30px;" alt=""></td>
                                    <td>{{$data[0]['aciklama']}}</td>
                                                                     
                                </tr>
                            </tbody>
                        </table>
                        <table class="table"><h5>Footer Sütun 2</h5><a href="{{route('admin.footer.edit',['id'=>$data[1]['id']])}}">Düzenle</a>
                            <thead>
                                <tr>
                                    <th scope="col">Başlık</th>
                                    <th scope="col">Açıklama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data[1]['baslik']}}</td>
                                    <td>{{$data[1]['aciklama']}}</td>
                                                                  
                                </tr>
                            </tbody>
                        </table>
                        <table class="table"><h5>Footer Sosyal Medya</h5><a href="{{route('admin.footer.edit',['id'=>$data[2]['id']])}}">Düzenle</a>
                            <thead>
                                <tr>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Twitter</th>
                                    <th scope="col">Instagram</th>
                                    <th scope="col">Pinterest</th>
                                    <th scope="col">Linkedin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data[2]['facebook']}}</td>
                                    <td>{{$data[2]['twitter']}}</td>
                                    <td>{{$data[2]['instagram']}}</td>
                                    <td>{{$data[2]['pinterest']}}</td>
                                    <td>{{$data[2]['linkedin']}}</td>
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

            