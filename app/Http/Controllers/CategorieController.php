<?php

namespace App\Http\Controllers;

use App\Modeles\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function epilation()
    {
        $products = Service::where('categorie_id', "=", "5")->get();

        return view('epilation', [
            'products' => $products,
        ]);
    }

    public function hammam()
    {
        $products = Service::where('categorie_id', "=", "1")->get();

        return view('hammam', [
            'products' => $products,
        ]);
    }

    public function lipomodelage()
    {
        $products = Service::where('categorie_id', "=", "7")->get();

        return view('lipomodelage', [
            'products' => $products,
        ]);
    }

    public function massage()
    {
        $products = Service::where('categorie_id', "=", "6")->get();

        return view('massage', [
            'products' => $products,
        ]);
    }

    public function ongles()
    {
        $products = Service::where('categorie_id', "=", "4")->get();

        return view('ongles', [
            'products' => $products,
        ]);
    }

    public function soins()
    {
        $products = Service::where('categorie_id', "=", "3")->get();

        return view('soins', [
            'products' => $products,
        ]);
    }

    public function uv()
    {
        $products = Service::where('categorie_id', "=", "2")->get();

        return view('uv', [
            'products' => $products,
        ]);
    }
}
