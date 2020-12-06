@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Header Düzenle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  action={{route('admin.header.update',['id'=>$data[0]['id']])}} method="POST">
                                        @csrf    
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Anasayfa Başlığı </label>
                                                <input  type="text" class="form-control" value="{{$data[0]['anasayfa_baslik']}}" id="" name="anasayfa_baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Header Email </label>
                                                <input  type="text" class="form-control" value="{{$data[0]['email']}}" id="" name="email">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Header Telefon </label>
                                                <input  type="text" class="form-control" value="{{$data[0]['telefon']}}" id="" name="telefon">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Header Başlık</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['baslik']}}" id="" name="baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary">Düzenle</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
@endsection
            
