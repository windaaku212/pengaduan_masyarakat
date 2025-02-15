<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;


class KategoriPengaduanController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('backend.content.kategori.index', compact('kategori'));
    }

    public function create()
    {
   
    }

    public function store(Request $request)
    {
    }
}
