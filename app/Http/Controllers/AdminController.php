<?php

namespace App\Http\Controllers;

use App\Document;
use App\News;
use App\Submission;
use ConsoleTVs\Charts\Facades\Charts;
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
    public function publishedRegulation(){
        $submissions = DB::table('documents')->paginate(20);
        return view('admin.skpublished', compact('submissions'));
    }
    public function onProgressRegulation(){
        $submissions = DB::table('submissions')->paginate(20);
        return view('admin.skpending', compact('submissions'));
    }
    public function addNews(){
        try {
            if (\request()->hasFile('image')) {
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
                return redirect()->back()->with('success','Berhasil Upload Berita Baru');
            }
            else{
                return redirect()->back()->with('alert','Harus ada Gambar');
            }
        }
        catch (Exception $exception){
            return redirect()->back()->with('alert',$exception->getMessage());
        }
    }
    public function changeProgress($id,$progress){
        try{
            Submission::all()->where('id',$id)->update([
                'status' => $progress
            ]);
            $ret = [
                'status' => 201,
                'description' => 'Status Updated'
            ];
            return response()->json($ret);
        }
        catch (Exception $exception){
            return response()->json(['status'=> $exception->getCode(), 'description'=> $exception->getMessage()]);
        }
    }
    public function acceptSubmission($id){
        try{
            $submission=Submission::all()->where('id',$id)->first();
            $submission->update([
                'status' => 'Accepted'
            ]);
            $documents = new Document();
            $documents->id = 'SK'.str_random(10);
            $documents->submissionID = $id;
            $documents->title=$submission->title;
            $documents->files='TBD';
            $documents->save();
            return redirect()->back()->with('success', 'Data '.$id.' Diterima');
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
