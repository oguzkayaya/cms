<?php

namespace App\Http\Controllers\admin\slider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use File;
use App\Helper\imageUpload;
use Image;

class indexController extends Controller
{
    public function index()
    {
        $data = Slider::paginate(10);
        return view('admin.slider.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.slider.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,9000),"slider",$request->file('image'));
        $insert = Slider::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malesef eklenemedi');
        }
        
    }
    public function edit($id)
    {
        $data = Slider::where('id','=',$id)->get();
        return view('admin.slider.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {   
        $all = $request->except('_token');
        $id = $request->route('id');
        
         $insert = Slider::where('id','=',$id)->update($all);
         if ($insert) {
             return redirect()->back()->with('status','Slider Düzenlendi.');
         }
         else
         {
            return redirect()->back()->with('status','Slider Düzenlenemedi.');
         }
        
        
    }
    public function delete($id)
    {
        
        $data = Slider::where('id','=',$id)->delete();
        return redirect()->back();
    }
}

