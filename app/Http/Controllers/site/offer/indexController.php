<?php

namespace App\Http\Controllers\site\offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Mail;

class indexController extends Controller
{
    public function index()
    {
        return view('site.offer.index');
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
