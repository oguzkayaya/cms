<?php

namespace App\Http\Controllers\admin\urunler;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Urunler;
use App\Helper\imageUpload;
class indexController extends Controller
{
    public function index()
    {
        $data = Urunler::all();
        return view('admin.urunler.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.urunler.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,19000),"urunler",$request->file('image'));
        $insert = Urunler::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla tamamlandı.');
        } else {
            return redirect()->back()->with('status','Malesef tamamlanamadı.');
        }
    }
    public function delete($id)
    {
        Urunler::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
