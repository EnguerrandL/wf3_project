{{-- Page edition client --}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Créer un service</div>
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
                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf <!-- Ajoute <input type=hidden value=XXXXX -->
                            <div class="row">
                                {{-- <div class="col-md-12 mb-3">
                                    <label for="title">Catégorie</label>
                                <input value="{{ old('categorie') }}" placeholder=""
                                            name="categorie_id" type="text" class="form-control" >
                                </div> --}}



                                <select class="col-md-12 mb-3" name="categorie_id">
                                    @foreach($pushs as $push)
                                    <option value="{{($push->id)}}">


                                        {{$push->nom}}</option>
                                    @endforeach
                                    </select>

                                <div class="col-md-12 mb-3">
                                    <label for="title">Nom</label>
                                    <input value="" placeholder=""
                                            name="nom" type="text" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title">Description</label>
                                    <input value="" placeholder=""
                                            name="description" type="text" class="form-control" >
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title">Prix</label>
                                    <input value="" placeholder=""
                                            name="prix" type="text" class="form-control">
                                </div>



                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-block btn-primary"
                                                   value="Créer le service">
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-block btn-danger"
                                               href="{{ route('admin.index') }}">
                                                Retourner à la liste des services
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


