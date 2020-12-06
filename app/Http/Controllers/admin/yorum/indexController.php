<?php

namespace App\Http\Controllers\admin\yorum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Yorum;
use App\YorumCevap;

class indexController extends Controller
{
    public function index()
    {
        $data = Yorum::all();
        return view('admin.yorum.index',['data'=>$data]);
    }  
    public function delete($id)
    {   
        Yorum::where('id','=',$id)->delete();
        return redirect()->back();
    }
    public function answer($id)
    {
        $control = Yorum::where('id','=',$id)->count();
        if ($control!=0) {
            $data = Yorum::where('id','=',$id)->get();
            return view('admin.yorum.answer',['data'=>$data]);
        } else {
            return abort('404');
        }
    }
    public function store(Request $request)
    {
        $id = $request->route('id');
        $control = Yorum::where('id','=',$id)->count();
        if ($control!=0) {
            if(YorumCevap::getMessageControl($id)){
                //update
                 YorumCevap::where('yorumid',$id)->update(['mesaj'=>$request->get('mesaj')]);
            }
            else{//insert
                $array = [
                    'yorumid'=>$id ,
                    'userid'=>$id,
                    'mesaj'=>$request->get('mesaj')
                ];
                YorumCevap::create($array);
            }
            return redirect()->back();
        } else {
            
        }
    }
}
