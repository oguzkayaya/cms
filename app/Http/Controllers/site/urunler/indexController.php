<?php

namespace App\Http\Controllers\site\urunler;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Urunler;

class indexController extends Controller
{
    public function kategori($id)
    {
        $data = Urunler::where('urunkategoriid','=',$id)->paginate(4);
        if ($data) {
            return view('site.urunler.kategori',['data'=>$data]);
        } else {
            return abort('404');
        }
    }
    public function view($link)
    {
        $data = Urunler::where('link','=',$link)->get();
        if ($data) {
            return view('site.urunler.view',['data'=>$data]);
        } else {
            return abort('404');
        }
    }
}
