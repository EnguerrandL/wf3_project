{{-- Page edition client --}}


	@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Mise à jour client</div>
                    <div class="card-body">

                        <!-- Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Formulaire -->
                        <form action="/admin" method="POST">
                            @method('PATCH') <!-- Ajoute <input type=hidden value=PUT -->
                            @csrf <!-- Ajoute <input type=hidden value=XXXXX -->
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="title">Montant restant</label>
                                    <input value="" placeholder=""
                                            name="affichage_prix" type="text" class="form-control" id="affichage_prix">
                                </div>
                            
                                <div class="col-md-12 mb-3">
                                    <label for="status">status</label>
                                    <select class="custom-select"  value="" name="status">
                                         <option selected  value="valide">Valide</option>
                                         <option selected  value="utiliser">Utiliser</option>
                                         <option selected  value="annuler">Annuler</option>
                                         <option selected  value="rembourser">Rembourser</option>
                                     
                                    </select>
                                </div>
                         
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-block btn-primary"
                                                   value="Mettre à jour le client">
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-block btn-danger"
                                               href="{{ route('admin.index') }}">
                                                Retourner à la liste des cliens
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


