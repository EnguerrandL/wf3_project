<?php

namespace App\Http\Controllers\Categorie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
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


    public function massage() {
        return view('categorie.massage');
    }


    public function soins() {
        return view('categorie.soins');
    }


    public function uv() {
        return view('categorie.uv');
    }



}
