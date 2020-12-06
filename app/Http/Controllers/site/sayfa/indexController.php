<?php

namespace App\Http\Controllers\site\sayfa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sayfa;

class indexController extends Controller
{
    public function index($link)
    {
        $data = Sayfa::where('link','=',$link)->get();
        if ($data) {
            return view('site.sayfa.index',['data'=>$data]);
        } else {
            return abort('404');
        }
        
    }
}
