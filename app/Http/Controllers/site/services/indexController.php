<?php

namespace App\Http\Controllers\site\services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;

class indexController extends Controller
{
    public function index($link)
    {
        $data = Services::where('link','=',$link)->get();
        if ($data)
        {
            return view('site.sayfa.index',['data'=>$data]);
        }
        else
        {
            return abort('404');
        }
    }
}
