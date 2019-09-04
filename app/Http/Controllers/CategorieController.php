<?php

namespace App\Http\Controllers;

use App\Modeles\Product;
use App\Http\Controllers\Controller;
use App\Modeles\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();

        return view('categorie.index', [
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {
        $categorie = Categorie::where('slug', $slug)->first(); // Récupère la catégorie pour le slug fourni dans l'URL
        // $products = Product::where('categorie_id', $categorie->id)->get();
        $products = $categorie->services;

        return view('categorie.show', [
            'categorie' => $categorie,
            'products' => $products,
        ]);
    }

    public function epilation()
    {

        $products = Product::where('categorie_id', "=", "5")->get();

        return view('epilation', [
            'products' => $products,
        ]);
    }
    public function hammam()
    {

        $products = Product::where('categorie_id', "=", "1")->get();

        return view('hammam', [
            'products' => $products,
        ]);
    }
    public function lipomodelage()
    {

        $products = Product::where('categorie_id', "=", "7")->get();

        return view('lipomodelage', [
            'products' => $products,
        ]);
    }

    public function massage()
    {

        $products = Product::where('categorie_id', "=", "6")->get();

        return view('massage', [
            'products' => $products,
        ]);
    }

    public function ongles()
    {

        $products = Product::where('categorie_id', "=", "4")->get();

        return view('ongles', [
            'products' => $products,
        ]);
    }
    public function soins()
    {

        $products = Product::where('categorie_id', "=", "3")->get();

        return view('soins', [
            'products' => $products,
        ]);
    }

    public function uv()
    {

        $products = Product::where('categorie_id', "=", "2")->get();

        return view('uv', [
            'products' => $products,
        ]);
    }
}
