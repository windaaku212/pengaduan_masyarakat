<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use App\Models\Masyarakat;

class MasyarakattController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'Masyarakat')->get();
        return view('backend.content.masyarakat.index',compact('user'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.content.masyarakat.detail', compact('user'));
    }
}
