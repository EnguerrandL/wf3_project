<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Modeles\Categorie;
use Illuminate\Http\Request;
use App\Modeles\Service;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index() {
        $categories = Categorie::all();

        return view('admin.index', [
            'categories' =>$categories,
        ]);
    }

    public function show($slug) {
        $categorie = Categorie::where('slug', $slug)->first(); // Récupère la catégorie pour le slug fourni dans l'URL
        $services = $categorie->services; // Récupère la table des services

        return view('admin.show', [ // Renvoi les données dans la vue admin show
            'categorie' =>$categorie,
            'services' => $services,
        ]);
    }

    public function create()
    {
        $categories = Categorie::all();

        return view('admin.create', [
            'categories' =>$categories,
        ]);
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $categories = Categorie::all();

        return view('admin.edit', [
            'service' => $service,
            'categories' => $categories,
        ]);
    }

    public function update(ServiceRequest $request, $id)
    {
        $data = $request->validated();
        $service = Service::find($id);
        $service->categorie_id = $data['categorie_id'];
        $service->nom = $data['nom'];
        $service->description = $data['description'];
        $service->prix = $data['prix'];
        $service->created_at=now();
        $service->updated_at=now();
        $service->save();

        return redirect('/admin')->with('message', 'Votre service à bien était mis à jour');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/admin')->with('autre', 'Le service vient d\'être supprimer ) ;');
    }

    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        $service = new Service;
        $service->nom = $data['nom'];
        $service->description = $data['description'];
        $service->prix = $data['prix'];
        $service->categorie_id = $data['categorie_id'];
        $service->created_at=now();
        $service->updated_at=now();
        $service->save();

        return redirect('/admin')->with('message', 'Votre service à bien était envoyer');
    }
}
