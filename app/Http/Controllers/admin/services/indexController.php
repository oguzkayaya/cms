<?php

namespace App\Http\Controllers\admin\services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use App\Helper\imageUpload;

class indexController extends Controller
{
    public function index()
    {
        $data = Services::paginate(10);       
        return view('admin.services.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,19000),"services",$request->file('image'));
        $insert = Services::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malesef eklenemedi.');
        }
        
    }
    public function edit($id)
    {
        $data = Services::where('id','=',$id)->get();
        return view('admin.services.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {   
        $all = $request->except('_token');
        $id = $request->route('id');
        
         $insert = Services::where('id','=',$id)->update($all);
         if ($insert) {
             return redirect()->back()->with('status','Servis Düzenlendi.');
         }
         else
         {
            return redirect()->back()->with('status','Servis Düzenlenemedi.');
         }
        
        
    }
    public function delete($id)
    {
        
        $data = Services::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
