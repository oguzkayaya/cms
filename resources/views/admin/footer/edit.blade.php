@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Footer Sütun Düzenle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  action={{route('admin.footer.update',['id'=>$data[0]['id']])}} method="POST">
                                        @csrf    
                                        <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        @if($data[0]['id']=="1")
                                                        <label >Resim</label><br>
                                                        <img src="{{asset($data[0]['image'])}}" alt="" height="30" width="129px">               
                                                        <input  type="file" name="image">
                                                        @endif
                                                    </div>                                         
                                                </div>
                                            </div>
                                            @if(($data[0]['id']=="1") || ($data[0]['id']=="2"))
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Başlık</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['baslik']}}" id="" name="baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Açıklama</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['aciklama']}}" id="" name="aciklama">
                                            </div>                                         
                                        </div>
                                    </div>
                                    @endif
                                    @if($data[0]['id']=="3")
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Facebook</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['facebook']}}" id="" name="facebook">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Twitter</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['twitter']}}" id="" name="twitter">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Instagram</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['instagram']}}" id="" name="instagram">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Pinterest</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['pinterest']}}" id="" name="pinterest">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Linkedin</label>
                                                <input  type="text" class="form-control" value="{{$data[0]['linkedin']}}" id="" name="linkedin">
                                            </div>                                         
                                        </div>
                                    </div>
                                    @endif
                                        <button type="submit" class="btn btn-primary">Düzenle</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
@endsection
            
