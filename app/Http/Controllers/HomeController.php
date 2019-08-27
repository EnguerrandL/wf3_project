<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }



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

    public function contact()
    {
        return view('contact');
    }

    public function dev()
    {
        return view('dev');
    }

    public function mentionslegales()
    {
        return view('mentionslegales');
    }


// TESTS CONTROLLERS


    public function stripe()
    {
        return view('stripe');
    }
}
