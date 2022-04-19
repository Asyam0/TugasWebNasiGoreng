<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasgor;
use App\Models\Minum;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Minum = Minum::all();
        $Nasgor = Nasgor::all();
        return view('admin.admin', ['menu_nasgor' => $Nasgor], ['menu_minum' => $Minum]);
    }
}
