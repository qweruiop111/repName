<?php

namespace App\Http\Controllers;

use App\Models\catalog;
use App\Models\category;
use App\Models\publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function admin()
    {
        $categ = category::all();
        $publish = publisher::all();
        return view('admin', ['categ' => $categ, 'publish' => $publish]);
    }

    public function add(Request $request)
    {
        \App\Models\catalog::create([
            "name" => $request->input('name'),
            "imgsource" => $request->input('imgsource'),
            "price" => $request->input('price'),
            "publisher" => $request->input('publisher'),
            "stock" => $request->input('stock'),
            "datadrop" => $request->input('datadrop'),
            "antagonist" => $request->input('antagonist'),
            "category" => $request->input('categories'),
        ]);

        return redirect('/admin');
    }
}