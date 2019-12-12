<?php

namespace App\Http\Controllers;

use App\Document;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $news = News::all()->take(3);
        $submissions= \App\Submission::all();
        $skpub= DB::table('submissions')->join('documents','submissions.id','=','documents.id')->where('submissions.type','sk')->count();
        return view('index')->with([
            'news'=>$news,
            'sk'=>$submissions->where('type','=','sk')->count(),
            'skpub' =>$skpub,
            'peraturan' =>$submissions->where('type','=','peraturan')->count(),
            'kerjasama' => $submissions->where('type','=','kerjasama')->count(),
        ]);
    }
    public function profile(){
        return view('profile');
    }
    public function news(){
        $news = DB::table('news')->orderBy('created_at')->paginate(20);
        return view('news', compact('news'));
    }
    public function forms(){
        return view('form');
    }
    public function tracks(){
        return view('tracking');
    }
    public function newsDetails($id){
        $news = News::all()->where('id',$id)->first();
        return view('news_detail', compact('news'));
    }
    public function search(){
        $keyword = \request()->get('keyword');
        $documents = DB::table('documents')->where('title','LIKE','%'.$keyword.'%')->get();
        return view('search_result', compact('documents'));
    }
}
