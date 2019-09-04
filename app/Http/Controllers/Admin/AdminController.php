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
        $services = Service::orderBy('created_at', 'DESC')->paginate(10);
        $pushs = Categorie::with(['push'])->get();


        return view('admin.index', [
            'services' =>$services,
            'pushs' =>$pushs,


        ]);
    }

    public function show() {
        $services = Service::orderBy('created_at', 'DESC')->paginate(10);


        return view('admin.index', [
            'services' =>$services,

        ]);
    }


    public function create()
    {
        $service = Service::all();
        $pushs = Categorie::with(['push'])->get();


        return view('admin.create', [
            'service' =>$service,
            'pushs' =>$pushs,
        ]);
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $categories = Categorie::all();
        $pushs = Categorie::with(['push'])->get();



        return view('admin.edit', [
            'service' => $service,
            'categories' => $categories,
            'pushs' => $pushs,
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

        // $service->update($data);

        $service->created_at=now();
        $service->updated_at=now();

        $service->save();
        // Session::flash('status', 'Client mis à jour');
        // Session::flash('type', 'alert-success');

        return redirect('/admin')->with('message', 'Votre service à bien était envoyer');
    }





    public function destroy($id)

    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/admin');
    }



public function store(ServiceRequest $request)
{

    $data = $request->validated();
    $service = new Service;

    $service->nom = $data['nom'];
    $service->description = $data['description'];
    $service->prix = $data['prix'];
    $service->categorie_id = $data['categorie_id'];

    // $boncadeau->update($data);
$service->created_at=now();
$service->updated_at=now();

    $service->save();
    // Session::flash('status', 'Client mis à jour');
    // Session::flash('type', 'alert-success');

    return redirect('/admin')->with('message', 'Votre service à bien était envoyer');
}

}
