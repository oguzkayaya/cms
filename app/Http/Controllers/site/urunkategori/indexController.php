<?php

namespace App\Http\Controllers\site\urunkategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UrunKategori;

class indexController extends Controller
{
    public function index(){
        $posts = UrunKategori::paginate(4);
        return view('site.urunkategori.index',['posts'=>$posts]);
    }
}
