<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardpetugasController extends Controller
{
    public function index()
    {
        return view('backend.content.dashboardpetugas.index');
    }
}
