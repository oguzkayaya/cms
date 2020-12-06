<?php

namespace App\Http\Controllers\admin\referans;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Referans;
use App\Helper\imageUpload;

class indexController extends Controller
{
    public function index()
    {
        $data = Referans::all();
        return view('admin.referans.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.referans.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,9000),"referans",$request->file('image'));
        $insert = Referans::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malasef eklenemedi.');
        }
    }
    public function edit($id)
    {
        $data = Referans::where('id',$id)->get();
        return view('admin.referans.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $all = $request->except('_token');
        $id = $request->route('id');
        $update = Referans::where('id',$id)->update($all);
        if ($update) {
            return redirect()->back()->with('status','Başarıyla düzenlendi.');
        } else {
            return redirect()->back()->with('status','Malasef düzenlenemedi.');
        }
    }
    public function delete($id)
    {
        Referans::where('id',$id)->delete();
        return redirect()->back();
    }
}
