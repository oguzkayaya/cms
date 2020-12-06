<?php

namespace App\Http\Controllers\admin\footer;

use App\FooterColumn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index()
    {
        $data = FooterColumn::all();
        return view('admin.footer.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.footer.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,19000),"kitap",$request->file('image'));
        $insert = FooterColumn::create($all)-limit(2);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malasef eklenemedi.');
        }
    }
    public function edit($id)
    {
        $data = FooterColumn::where('id',$id)->get();
        return view('admin.footer.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $all = $request->except('_token');
        $id = $request->route('id');
        
        $update = FooterColumn::where('id',$id)->update($all);
        if ($update) {
            return redirect()->back()->with('status','Başarıyla düzenlendi.');
        } else {
            return redirect()->back()->with('status','Malasef düzenlenemedi.');
        }
    }
    public function delete($id)
    {
        FooterColumn::where('id',$id)->delete();
        return redirect()->back();
    }
}
