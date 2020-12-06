@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Cevap Ver</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  action="{{route('admin.yorum.store',['id'=>$data[0]['id']])}}" method="POST">
                                    @csrf    
                                    <label for="">Yorum</label>
                                    <p>{{$data[0]['mesaj']}}</p>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="">Cevabın</label>
                                            <textarea name="mesaj" class="form-control" cols="30" rows="10"{{\App\YorumCevap::getMessage($data[0]['id'])}}></textarea>
                                            </div>                                         
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary">Cevapla</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
@endsection
            
