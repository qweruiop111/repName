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
        return view('admin', [
            'categ' => $categ,
            'publish' => $publish,
            'catalogs' => \App\Models\catalog::all()
        ]);
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

    public function addCategory(Request $request)
    {
        \App\Models\category::create([
            "name" => $request->input('name'),
        ]);

        return redirect('/admin');
    }

    public function adminUpdate($id)
    {
        $date = catalog::find($id);
        $categ = category::all();
        $publish = publisher::all();
        return view('adminUpdate', [
            'catalog' => $date,
            'categ' => $categ,
            'publish' => $publish
        ]);
    }

    public function adminUpdatePost(Request $request)
    {
        $qwe = catalog::find($request->id);
        $qwe->name = $request->input("name");
        $qwe->imgsource = $request->input("imgsource");
        $qwe->price = $request->input("price");
        $qwe->publisher = $request->input("publisher");
        $qwe->stock = $request->input("stock");
        $qwe->datadrop = $request->input("datadrop");
        $qwe->antagonist = $request->input("antagonist");
        $qwe->category = $request->input("categories");
        $qwe->save();

        return redirect('/admin');
    }
}