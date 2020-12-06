@extends('layouts.site')
@section('seo')
<title>Teklif Al</title>
@endsection

@section('content')
<section class="request-section padding bd-bottom">
        <div class="container">
            <div class="row request-wrap">
                <div class="col-md-6">
                    <div class="request-heading mb-40">
                       <h2>Teklif Al</h2>
                       <p>Danışmanlarımız Benzersiz Bir Bakış Açısı Getiren Uzmanlardır</p>
                    </div>
                    <form action="{{route('site.offer.teklif')}}" method="post"  class="form-horizontal request-form">
                        @csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Ad Soyad" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Konu" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="text" cols="30" rows="5" class="form-control message" placeholder="Mesajınız" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Teklif Al</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="request-bg"></div>
    </section><!-- Request Section -->
@endsection
@section('footer')
@if(session("swal"))
    <script>swal("{{session("swal")}}");</script>
@endif
@endsection
