@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20">
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Ürün Kategori Düzenle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  action={{route('admin.urunkategori.update',['id'=>$data[0]['id']])}} method="POST">
                                        @csrf    
                                    
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Ürün Kategori Adı</label>
                                                    <input  type="text" class="form-control" value="{{$data[0]['name']}}" id="exampleInputPassword1" name="name">
                                                </div>                                         
                                            </div>
                                        </div>    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Kategori URL</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['link']}}" id="exampleInputPassword1" name="link">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Açıklama</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['aciklama']}}" id="exampleInputPassword1" name="aciklama">
                                            </div>                                         
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary">Kaydet</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
@endsection
            
