@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Slider Düzenle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  action={{route('admin.slider.update',['id'=>$data[0]['id']])}} method="POST">
                                        @csrf    
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Başlık</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['baslik']}}" id="exampleInputPassword1" name="baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['icerik']}}" id="exampleInputPassword1" name="icerik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label >Resim</label><br>
                                                @if($data[0]['image']!="")
                                                    <img src="{{asset($data[0]['image'])}}" alt="" height="400px" width="400px">               
                                                    @endif
                                                <input  type="file" name="image">
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
            
