<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;

class TesController extends Controller
{
    public function index(){
        dd(SSO::getUser());
    }
}
