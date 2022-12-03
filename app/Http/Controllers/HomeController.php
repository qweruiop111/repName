<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /* adminka 
    public function __construct()
    {
    $this->middleware('auth');
    }
    */
    public function index()
    {
        return view('index');
    }

    public function find()
    {
        return view('find');
    }

    public function tovarDetail()
    {
        return view('tovarDetail');
    }

    public function auth()
    {
        return view('layouts.app');
    }

    public function catalog()
    {
        $date = DB::table('catalogs')->get();
        return view('catalog', ['arr' => $date]);
    }

    public function comic($id)
    {
        $date = DB::table('catalogs')->where('id', '=', $id)->get();
        return view('comic', ['arr' => $date]);
    }

    public function last5()
    {
        $date = DB::table('catalogs')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        return view('about', ['arr' => $date]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
}