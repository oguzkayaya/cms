@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Slider Ekle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  enctype="multipart/form-data" action="{{route('admin.slider.store')}}" method="POST">
                                        @csrf    
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Başlık</label>
                                                <input  type="text" class="form-control" id="exampleInputPassword1" name="baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik</label>
                                                <input  type="text" class="form-control" id="exampleInputPassword1" name="icerik">
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
                                    
                                     
                                                              
                                        
                                       
                                        <button type="submit" class="btn btn-primary">Ekle</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
@endsection
            
