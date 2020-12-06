<?php

namespace App\Http\Controllers\admin\urunkategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UrunKategori;
use App\Helper\imageUpload;

class indexController extends Controller
{
    public function index()
    {
        $data = UrunKategori::paginate(10);
        return view('admin.urunkategori.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.urunkategori.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,19000),"urunkategori",$request->file('image'));
        $insert = UrunKategori::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malasef eklenemedi.');
        }
    }
    public function edit($id)
    {
        $data = UrunKategori::where('id','=',$id)->get();
        return view('admin.urunkategori.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $all = $request->except('_token');
        $id = $request->route('id');

        $insert = UrunKategori::where('id','=',$id)->update($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla düzenlendi.');
        } else {
            return redirect()->back()->with('status','Malasef düzenlenemedi.');
        }
        
        
    }
    public function delete($id)
    {
         UrunKategori::where('id','=',$id)->delete();
         return redirect()->back();
    }
}
