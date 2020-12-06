<?php

namespace App\Http\Controllers\site\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Yorum;

class indexController extends Controller
{
    public function index(){
        $posts = Blog::where('gorunum',1)->orderBy('tarih','asc')->paginate(4);
        return view('site.blog.index',['posts'=>$posts]);
    }
    public function view($link)
    {
        $data = Blog::where('link','=',$link)->get();
        foreach($data as $a){
            $blogId = $a->id;
        }
        $yorum = Yorum::where('blogId','=',$blogId)->orderBy('id','desc')->get();
        if ($data) {
            return view('site.blog.view',['data'=>$data,'link'=>$link,'yorum'=>$yorum]);
        } else {
            return abort('404');
        }
    }
    public function kategori($id)
    {
        $data = Blog::where('kategoriid','=',$id)->where('gorunum',1)->orderBy('tarih','asc')->paginate(4);
        if ($data) {
            return view('site.blog.kategori',['data'=>$data]);
        } else {
            return abort('404');
        }
    }
    public function yorum(Request $request)
    {
        $link = $request->route('link');
        $veri= Blog::where('link','=',$link)->get();
        foreach($veri as $veri){
            $blogId = $veri->id;
        }
        
        if ($blogId!=0) {
            $request->validate(['name'=>'required','mesaj'=>'required']);
            $all = $request->except('_token');
            $all['blogId'] = $blogId;
            Yorum::create($all);
            return redirect()->back();

        } else {
           return abort('404');
        }
        

    }
    
    
}
