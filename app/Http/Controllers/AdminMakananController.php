<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasgor;
use App\Models\Minum;

class AdminMakananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Minum = Minum::all();
        $Nasgor = Nasgor::all();
        return view('admin.admin', ['menu_nasgor' => $Nasgor], ['menu_minum' => $Minum]);
    }

    public function create()
    {
        return view('admin.tambahmakan');
    }

    public function store(Request $request)
    {
        $makanan = new Nasgor;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/Makanan/', $filename);
            $makanan->gambar = $filename;
        }
        $makanan->nama = $request->input('nama');
        $makanan->harga = $request->input('harga');
        $makanan->save();
        return redirect()->back()->with('statusm', 'Data Berhasil Dimasukan');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $Makan = Nasgor::find($id);
        if ($Makan == null) {
            session()->flash('message', 'Deletion failed');
        } else {
            $Makan->delete();
            session()->flash('message', 'Delete Successfully');
        }

        return redirect('admin');
    }
}
