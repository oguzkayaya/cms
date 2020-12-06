<?php

namespace App\Http\Controllers\admin\sayfa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sayfa;
use App\Helper\imageUpload;

class indexController extends Controller
{
    public function index()
    {
        $data = Sayfa::paginate(10);       
        return view('admin.sayfa.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.sayfa.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,19000),"sayfa",$request->file('image'));
        $insert = Sayfa::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malesef eklenemedi.');
        }
        
    }
    public function edit($id)
    {
        $data = Sayfa::where('id','=',$id)->get();
        return view('admin.sayfa.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {   
        $all = $request->except('_token');
        $id = $request->route('id');
        
         $insert = Sayfa::where('id','=',$id)->update($all);
         if ($insert) {
             return redirect()->back()->with('status','Sayfa Düzenlendi.');
         }
         else
         {
            return redirect()->back()->with('status','Sayfa Düzenlenemedi.');
         }
        
        
    }
    public function delete($id)
    {
        
        $data = Sayfa::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
