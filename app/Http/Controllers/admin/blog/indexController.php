<?php

namespace App\Http\Controllers\admin\blog;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\imageUpload;

class indexController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        return view('admin.blog.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1,19000),"blog",$request->file('image'));
        $insert = Blog::create($all);
        if ($insert) {
            return redirect()->back()->with('status','Başarıyla eklendi.');
        } else {
            return redirect()->back()->with('status','Malasef eklenemedi.');
        }
    }
    public function edit($id)
    {
        $data  = Blog::where('id','=',$id)->get();
        return view('admin.blog.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $all = $request->except('_token');
        $id = $request->route('id');
        $update = Blog::where('id','=',$id)->update($all);
        if ($update) {
            return redirect()->back()->with('status','Başarıyla düzenlendi.');
        } else {
            return redirect()->back()->with('status','Malasef düzenlenemedi.');
        }       
    }
    public function delete($id)
    {
        Blog::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
