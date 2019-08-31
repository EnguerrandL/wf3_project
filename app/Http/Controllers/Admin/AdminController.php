<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modeles\Client;


class AdminController extends Controller
{
    public function index() {
        $clients = Client::all();

        return view('admin.index', [
            'clients' =>$clients,
        ]);
    }



    public function edit() {
        return view('admin.edit');
    }
}
