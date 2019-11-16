<?php

namespace App\Http\Controllers;

use App\Mail\SubmissionEmail;
use App\Submission;
use Illuminate\Support\Facades\Mail;
use SSO\SSO;

class UserController extends Controller
{
    public function addSubmission(){
        try {
            if (\request()->hasFile('draft_files')) {
                $draft_files = \request()->file('draft_files');
                $name = '/uploads/submissions/'.request()->name;
                $draft_files->move(public_path($name),$draft_files->getClientOriginalName());
                $draft_files_path = $name."/".$draft_files->getClientOriginalName();
                $submission = new Submission();
                $id = 'SUB'.str_random(10);
                $submission->id = $id;
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
                return redirect()->back()->with('alert','File tidak Ditemukan, Upload File!');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('alert',$exception->getMessage());
        }
    }
    public function trackSubmission($id){
        try{
            $submission = Submission::all()->where('id',$id);
            if ($submission){
                return redirect()->back()->with('data',$submission);
            }
            else {
                return redirect()->back()->with('alert', 'Data Tidak Ditemukan!');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('alert',$exception);
        }
    }
}
