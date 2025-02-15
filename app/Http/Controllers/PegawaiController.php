<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PegawaiController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'Admin')->orWhere('role', 'Petugas')->get();
        return view('backend.content.pegawai.index', compact('user'));
    }

    public function create()
    {
        return view('backend.content.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:pegawai',
            'name' => 'required|string|max::255',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|string|',
            'notelepon' => 'required|string|max::255',
            'email' => 'required|string|max::255|unique:users,email',
            'password' => 'required|string|max::255',

        ]);

        User::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.content.pegawai.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'alamat' => 'required',
        ]);

        User::findOrFail($id)->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }






    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.content.pegawai.detail', compact('user'));
    }
}
