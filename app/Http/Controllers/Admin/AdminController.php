<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modeles\Client;
use App\Modeles\Bon_cadeau;
use Illuminate\Support\Facades\Session;





class AdminController extends Controller
{
    public function index() {
        $clients = Client::all();
        $BonC = Bon_cadeau::all();


        return view('admin.index', [
            'clients' =>$clients,
            'BonC' =>$BonC,
        ]);
    }



    public function edit($id)
    {
        $Client = Client::find($id);
        $Bon_cadeau = Bon_cadeau::find($id);

        return view('admin.edit', [
            'Client' => $Client,
            'Bon_cadeau' => $Bon_cadeau
        ]);
    }


    public function update(Bon_cadeau $request, $boncadeau)
    {

        $Bon_cadeau = Bon_cadeau::find($id);
        $data = $request->validated([
            'affichage_prix' => 'required|integer',
            'status' => 'required',
        ]);

        $updated = Bon_cadeau::find($id);
        $updated->affichage_prix = $request->get('affichage_prix');
        $updated->status = $request->get('status');
       
        // $boncadeau->update($data);

        
        $updated->save();
        // Session::flash('status', 'Client mis à jour');
        // Session::flash('type', 'alert-success');

        return redirect('admin/');
    }





    public function destroy()
   
    {

        $clients = Client::all();
        $BonC = Bon_cadeau::find();

        $clients->delete();
        $BonC->delete();
        return redirect('admin');
    }




    
}
