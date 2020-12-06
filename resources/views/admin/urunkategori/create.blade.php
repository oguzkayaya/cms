@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 ">
                        <div class="col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Ürün Kategori Ekle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  enctype="multipart/form-data" action="{{route('admin.urunkategori.store')}}" method="POST">
                                        @csrf    
                                    
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Ürün Kategori Adı</label>
                                                    <input  type="text" class="form-control" id="" name="name">
                                                </div>                                         
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Ürün Kategori URL</label>
                                                <input  type="text" class="form-control" id="" name="link">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Resim</label>
                                                    <input  type="file" name="image">
                                                </div>                                         
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Açıklama</label>
                                                <input  type="text" class="form-control" id="" name="aciklama">
                                            </div>                                         
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary">Ekle</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
@endsection
            
