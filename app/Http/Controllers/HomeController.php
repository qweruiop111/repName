<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
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
    public function home()
    {
        return view('home');
    }
}