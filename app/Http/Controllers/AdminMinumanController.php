<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasgor;
use App\Models\Minum;

class AdminMinumanController extends Controller
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
        return view('admin.tambahminum');
    }


    public function store(Request $request)
    {
        $minuman = new Minum;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/Minuman/', $filename);
            $minuman->gambar = $filename;
        }
        $minuman->nama = $request->input('nama');
        $minuman->harga = $request->input('harga');
        $minuman->save();
        return redirect()->back()->with('status', 'Data Berhasil Dimasukan');
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
        $Minum = Minum::find($id);
        $Minum->delete();
        return redirect('admin');
    }
}
