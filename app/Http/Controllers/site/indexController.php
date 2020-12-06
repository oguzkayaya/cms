<?php

namespace App\Http\Controllers\site;

use App\FooterColumn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use App\Slider;
use Mail;

class indexController extends Controller
{
    public function index()
    {
        $slider = Slider::orderBy('id','asc')->get();
        $services = Services::where('gorunum',1)->orderBy('id','asc')->get();
        return view('site.index',['slider'=>$slider,'services'=>$services]);
    }
    public function teklif(Request $request)
    {
        $request->validate(['name'=>'required','email'=>'required','subject'=>'required','text'=>'required']);
        $all = $request->except('_token');
        $data = ['name'=>$all['name'],'email'=>$all['email'],'subject'=>$all['subject'],'text'=>$all['text']];
        

        Mail::send('mail.teklif',$data,function($message)
        {
            $message->subject('Online Teklif');
            $message->to('halilbadem47@gmail.com');
        });
        return redirect()->back()->with('swal','Teklifinizi aldık en yakın zamanda irtibata geçeceğiz.');
    }
}
