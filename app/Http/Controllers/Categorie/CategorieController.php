<?php

namespace App\Http\Controllers\Categorie;

use App\Modeles\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function show($slug) {
        $categorie = Category::where('slug', $slug)->first(); // Récupère la catégorie par le slug fourni dans l'URL
        //$products = Product::where('categorie_id', $categorie->id )->get();
        $products = $categorie->services;

        return view('categorie.show', [
            'categorie' => $categorie,
            'products' => $products,
        ]);

    }

    public function services() {
        $products = Product::all();

        return view('categorie.massage')->with('products', $products);
    }


    public function massage() {
        return view('categorie.massage');
    }

    public function cellum6() {
        return view('categorie.cellum6');
    }


    public function epilation() {
        return view('categorie.epilation');
    }


    public function hammam() {
        return view('categorie.hammam');
    }


    public function mainpied() {
        return view('categorie.mainpied');
    }





    public function soins() {
        return view('categorie.soins');
    }


    public function uv() {
        return view('categorie.uv');
    }



}
