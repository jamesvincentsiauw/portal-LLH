<?php

namespace App\Http\Controllers;

use App\Document;
use App\News;
use App\Submission;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class AdminController extends Controller
{
    public function index(){
        $submissions = Submission::all()->take(10);
        $count = Submission::all();
        $chart = Charts::database($count, 'bar', 'highcharts')
            ->title('`')
            ->dimensions(1000, 500)
            ->elementLabel('Total Pengajuan Regulasi')
            ->groupBy('type')
            ->responsive(true)
            ->colors(['#258b96', '#a36942', '#f4d953']);

        return view('admin.index_dashboard', compact('submissions','chart'));
    }
    public function showLoginForm(){
        return view('admin.login');
    }
    public function loginAdmin(){
        $password ="LLHITB1920";
        if ($password == \request('password')){
            Session::put('name', 'Admin LLH');
            Session::put('admin', true);
            return redirect('/admin');
        }
        else{
            return redirect()->back()->with('alert', 'Maaf, Password Anda Salah!');
        }
    }
    public function logout(){
        \request()->session()->flush();
        return redirect('/');
    }
    public function publishedRegulation(){
        $submissions = DB::table('documents')->paginate(20);
        return view('admin.skpublished', compact('submissions'));
    }
    public function onProgressRegulation(){
        $submissions = DB::table('submissions')->paginate(20);
        return view('admin.skpending', compact('submissions'));
    }
    public function showNews(){
        $news = DB::table('news')->paginate(20);
        return view('admin.adminNews', compact('news'));
    }
    public function addNewsForm(){
        return view('admin.addNews');
    }
    public function addNews(){
        try {
            $image = \request()->file('image');
            $name = '/uploads/admin/news';
            $image->move(public_path($name), $image->getClientOriginalName());
            $image_files_path = $name . "/" . $image->getClientOriginalName();

            $news = new News();
            $news->id = 'NEWS' . str_random(20);
            $news->image = $image_files_path;
            $news->title = \request()->title;
            $news->body = \request()->body;
            $news->author = 'Admin Lembaga Layanan Hukum ITB';
            $news->save();
            return redirect('/admin')->with('success','Berhasil Upload Berita Baru');
        }
        catch (Exception $exception){
            return redirect()->back()->with('alert',$exception->getMessage());
        }
    }
    public function deleteNews($id){
        try {
            DB::table('news')->where('id', $id)->delete();
            return redirect()->back()->with('success','Berhasil Menghapus Berita');
        }
        catch (Exception $exception){
            return redirect()->back()->with('alert',$exception->getMessage());
        }
    }
    public function changeProgress($id){
        try{
            Submission::all()->where('id',$id)->first()->update([
                'status' => \request()->status
            ]);
            return redirect()->back()->with('success','Berhasil mengubah status');
        }
        catch (Exception $exception){
            return redirect()->back()->with('alert',$exception->getMessage());
        }
    }
    public function showAcceptanceForm($id){
        $submission = Submission::all()->where('id',$id)->first();
        return view('admin.acceptanceForm', compact('submission'));
    }
    public function acceptSubmission($id){
        try{
            $submission=Submission::all()->where('id',$id)->first();
            $submission->update([
                'status' => 'Accepted'
            ]);
            $document = \request()->file('document');
            $name = '/documents/'.$submission->type;
            $document->move(public_path($name),$document->getClientOriginalName());
            $file_path = $name."/".$document->getClientOriginalName();

            $documents = new Document();
            $documents->id = 'SK'.str_random(10);
            $documents->submissionID = $id;
            $documents->title=$submission->title;
            $document->type = $submission->type;
            $documents->files=$file_path;
            $documents->save();
            return redirect('/admin')->with('success', 'Data '.$id.' Diterima');
        }
        catch (Exception $exception){
            return redirect()->back()->with('alert', $exception->getMessage());
        }
    }
    public function declineSubmission($id){
        try{
            Submission::all()->where('id',$id)->first()->update([
                'status' => 'Declined'
            ]);
            return redirect()->back()->with('success', 'Data '.$id.' Ditolak');
        }
        catch (Exception $exception){
            return redirect()->back()->with('alert', $exception->getMessage());
        }
    }
}
