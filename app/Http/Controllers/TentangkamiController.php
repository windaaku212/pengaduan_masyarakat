<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    public function index()
    {
        return view('frontend.tentang-kami');  
    }
}
