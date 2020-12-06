<?php

namespace App\Http\Controllers\admin\blogkategori;

use App\BlogKategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index()
    {
        $data = BlogKategori::paginate(10);
        return view('admin.blogkategori.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.blogkategori.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $insert = BlogKategori::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malasef eklenemedi.');
        }
    }
    public function edit($id)
    {
        $data = BlogKategori::where('id','=',$id)->get();
        return view('admin.blogkategori.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $all = $request->except('_token');
        $id = $request->route('id');

        $insert = BlogKategori::where('id','=',$id)->update($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla düzenlendi.');
        } else {
            return redirect()->back()->with('status','Malasef düzenlenemedi.');
        }
        
        
    }
    public function delete($id)
    {
         BlogKategori::where('id','=',$id)->delete();
         return redirect()->back();
    }
}
