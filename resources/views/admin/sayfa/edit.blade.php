@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Sayfa Düzenle</h4>
                                <a href="{{route('site.sayfa.index',['link'=>$data[0]['link']])}}">
                                <button  class="btn btn-primary">Sayfaya git</button></a>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  action={{route('admin.sayfa.update',['id'=>$data[0]['id']])}} method="POST">
                                        @csrf    
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label >Sayfa Resmi</label>
                                                
                                                @if($data[0]['image']!="")
                                                    <img src="{{asset($data[0]['image'])}}" alt="" height="400px" width="400px">               
                                                    @endif
                                                    <input  type="file" name="image">
                                            </div>                                         
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Sayfa Adı</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['name']}}" id="" name="name">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Sayfa URL</label>
                                                    <input  type="text" class="form-control" value="{{$data[0]['link']}}" id="" name="link">
                                                </div>                                         
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Sayfa Başlığı</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['baslik']}}" id="" name="baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Açıklama</label>
                                                    <input  type="text" class="form-control" value="{{$data[0]['aciklama']}}" id="" name="aciklama">
                                                </div>                                         
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Anahtar Kelime</label>
                                                    <input  type="text" class="form-control" value="{{$data[0]['anahtar_kelime']}}" id="" name="anahtar_kelime">
                                                </div>                                         
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">İçerik</label>
                                                    <textarea name="icerik"  id="" cols="30" rows="10" class="ckeditor" >{{$data[0]['icerik']}}</textarea>
                                                </div>                                         
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Anasayfa Gösterim</label>
                                                    <select name="gosterim" id="">
                                                        <option value="0">Pasif</option>
                                                        <option value="1">Aktif</option>
                                                    </select>
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
            
