<?php

namespace App\Http\Controllers;

use App\Modeles\Product;
use App\Http\Controllers\Controller;
use App\Modeles\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index() {
        $categories = Categorie::all();

        return view('categorie.index', [
            'categories' =>$categories,
        ]);
    }

    public function show($slug) {
        $categorie = Categorie::where('slug', $slug)->first(); // Récupère la catégorie pour le slug fourni dans l'URL
        // $products = Product::where('categorie_id', $categorie->id)->get();
        $products = $categorie->services;

        return view('categorie.show', [
            'categorie' =>$categorie,
            'products' => $products,
        ]);
    }
}
