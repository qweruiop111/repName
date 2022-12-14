<?php

namespace App\Http\Controllers;

use App\Models\catalog;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // дефолтный каталог
    public function catalog()
    {
        $categor = category::all();
        $date = DB::table('catalogs')
            ->orderBy('datadrop', 'desc')
            ->get();
        return view('catalog', ['arr' => $date, "categories"=>$categor]);
    }


    public function catalogPrice($name, $nap)
    {
        $categor = category::all();
        $date =catalog::orderBy($name, $nap)->get();
        return view('catalog', ['arr' => $date,"categories"=>$categor]);
    }

    //фильтры
    public function filters($idCat)
    {
        $categor = category::all();
        $date =catalog::where("category",$idCat)->get();
        return view('catalog', ['arr' => $date,"categories"=>$categor]);
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
        $date = catalog::find($id);
        return view('comic', ['elem' => $date]);
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