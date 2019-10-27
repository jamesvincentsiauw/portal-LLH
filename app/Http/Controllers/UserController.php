<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;
use SSO\SSO;

class UserController extends Controller
{
    public function searchSubmission($id){
        $status=Submission::all()->where('id',$id);
        return $status['status'];
    }
    private function randomID($cat){
        $i = 0;
        $ret=$cat;
        while ($i<20){
            $ret+=rand(0,9);
        }
        return $ret;
    }
    public function addSubmission(){
        SSO::check();
        try {
            if (\request()->hasFile('draft_files')) {
                $draft_files = \request()->file('draft_files');
                $name = '/uploads/submissions/'.SSO::getUser()->name."draft";
                $draft_files->move($name);
                $draft_files_path = $name."/".$draft_files->getClientOriginalName();
            }
            if (\request()->hasFile('supporting_files')) {
                $supporting_files = \request()->file('supporting_files');
                $name = '/uploads/submissions/'.SSO::getUser()->name."supporting";
                $supporting_files->move($name);
                $supporting_files_path = $name."/".$supporting_files->getClientOriginalName();
            }
            $submission = new Submission();
            $submission->id = $this->randomID("SUB");
            $submission->submitterName = SSO::getUser()->name;
            $submission->submitterITBmail = SSO::getUser()->ITBmail;
            $submission->submitterWorkUnit = \request()->workUnit;
            $submission->draft_files = $draft_files_path;
            $submission->supporting_files = $supporting_files_path;

            $submission->save();

            return redirect()->back()->with('success','Pengajuan Sukses. Tunggu Kabar Selanjutnya');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('alert',$exception->getMessage());
        }
    }
}
