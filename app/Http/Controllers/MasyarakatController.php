<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('frontend.index');  
    }

    public function masyarakat(){
        return view('frontend.masyarakat');
    }
}
