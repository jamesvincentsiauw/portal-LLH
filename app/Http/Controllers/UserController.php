<?php

namespace App\Http\Controllers;

use App\Mail\SubmissionEmail;
use App\Submission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use SSO\SSO;

class UserController extends Controller
{
    public function addSubmission(){
        try {
            if (\request()->hasFile('draft_files')) {
                $draft_files = \request()->file('draft_files');
                if($draft_files->getClientOriginalExtension()!="zip"){
                    return redirect()->back()->withInput()->with('alert', "Please upload zip file! You tried to upload ".$draft_files->getClientOriginalExtension()." file!");
                }
                $name = '/uploads/submissions/'.request()->name;
                $draft_files->move(public_path($name),$draft_files->getClientOriginalName());
                $draft_files_path = $name."/".$draft_files->getClientOriginalName();

                $submission = new Submission();
                $id = 'SUB'.str_random(10);
                $submission->id = $id;
                $submission->title = request()->title;
                $submission->type = request()->type;
                $submission->submitterName = request()->name;
                $submission->submitterITBmail = request()->ITBmail;
                $submission->status = 'Reviewed';
                $submission->submitterWorkUnit = \request()->workUnit;
                $submission->draft_files = $draft_files_path;
                $submission->save();

                Mail::to(request()->ITBmail)->send(new SubmissionEmail(request(),$id));

                return redirect()->back()->with('success','Pengajuan Sukses. Tunggu Kabar Selanjutnya. ID pengajuan: '.$id);
            }
            else{
                return redirect()->back()->withInput()->with('alert','File tidak Ditemukan, Upload File! '. request()->file('draft_files')->getClientOriginalName());
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->withInput()->with('alert',$exception->getMessage());
        }
    }
    public function trackSubmission($id){
        try{
            $submission = DB::table('submissions')->where('id',$id)->get();
            if ($submission){
                $ret = [
                    'id'=> $submission[0]->id,
                    'submitterName' => $submission[0]->submitterName,
                    'status' => $submission[0]->status,
                    'created_at' => $submission[0]->created_at,
                ];
                return response()->json(['status'=>200,'results'=>$ret]);
            }
            else {
                return response()->json(['status'=>200,'results'=>null, 'description'=>'Data Tidak Ditemukan']);
            }
        }
        catch (\Exception $exception){
            return response()->json(['status'=>$exception->getCode(),'results'=>null,'description'=> $exception->getMessage()]);
        }
    }
}
