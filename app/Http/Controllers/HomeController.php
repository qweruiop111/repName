<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // дефолтный каталог
    public function catalog()
    {
        $date = DB::table('catalogs')
            ->orderBy('datadrop', 'desc')
            ->get();
        return view('catalog', ['arr' => $date]);
    }

    // по году производства
    public function catalogYearOrder()
    {
        $date = DB::table('catalogs')
            ->orderby('datadrop', 'asc')
            ->get();
        return view('catalog', ['arr' => $date]);
    }

    // по наименованию
    public function catalogName()
    {
        $date = DB::table('catalogs')
            ->orderby('antagonist', 'asc')
            ->get();
        return view('catalog', ['arr' => $date]);
    }

    // по цене
    public function catalogPrice()
    {
        $date = DB::table('catalogs')
            ->orderby('price', 'asc')
            ->get();
        return view('catalog', ['arr' => $date]);
    }

    //фильтры
    public function Marvel()
    {
        $date = DB::table('catalogs')
            ->where('publisher', '=', 'marvel')
            ->get();
        return view('catalog', ['arr' => $date]);
    }

    public function DC()
    {
        $date = DB::table('catalogs')
            ->where('publisher', '=', 'dc')
            ->get();
        return view('catalog', ['arr' => $date]);
    }

    public function other()
    {
        $date = DB::table('catalogs')
            ->where('publisher', '=', 'other')
            ->get();
        return view('catalog', ['arr' => $date]);
    }






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

    public function comic($id)
    {
        $date = DB::table('catalogs')->where('id', '=', $id)->get();
        return view('comic', ['arr' => $date]);
    }

    public function last5()
    {
        $date = DB::table('catalogs')
            ->orderBy('datadrop', 'desc')
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