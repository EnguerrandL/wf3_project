<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function chequecadeau()
    {
        return view('chequecadeau');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function dev()
    {
        return view('dev');
    }

    public function mentionslegales()
    {
        return view('mentionslegales');
    }

    public function epilation()
    {
        return view('epilation');
    }

    public function hammam()
    {
        return view('hammam');
    }

    public function lipomodelage()
    {
        return view('lipomodelage');
    }

    public function massage()
    {
        return view('massage');
    }

    public function ongles()
    {
        return view('ongles');
    }

    public function soins()
    {
        return view('soins');
    }

    public function uv()
    {
        return view('uv');
    }

    public function admin()
    {
        return view('admin');
    }
}
