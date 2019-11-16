<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index_dashboard');
    }
    public function publishedRegulation(){
        return view('admin.skpublished');
    }
    public function onProgressRegulation(){
        return view('admin.skpending');
    }
}
