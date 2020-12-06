<?php

namespace App\Http\Controllers\admin\header;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Header;

class indexController extends Controller
{
    public function index()
    {
        $data = Header::all();
        return view('admin.header.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.header.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $insert = Header::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malasef eklenemedi.');
        }
    }
    public function edit($id)
    {
        
        $data = Header::where('id',$id)->get();
        if ($data) {
            return view('admin.header.edit',['data'=>$data]);
        } else {
            return abort('404');
        }
    }
    public function update(Request $request)
    {
        
        $all = $request->except('_token');
        $id = $request->route('id');
        $update = Header::where('id',$id)->update($all);
        if ($update) {
            return redirect()->back()->with('status','Başarıyla düzenlendi.');
        } else {
            return redirect()->back()->with('status','Malasef düzenlenemedi.');
        }
    }
    public function delete($id)
    {
        Header::where('id',$id)->delete();
        return redirect()->back();

    }
}
