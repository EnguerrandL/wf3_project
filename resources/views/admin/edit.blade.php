{{-- Page edition client --}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-center policesnippet">
                    <div class="card-header"> Mise à jour des services</div>
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
                        <form action="{{ route('admin.update', ['id' => $service->id]) }}" method="POST">
                            @method('PUT') <!-- Ajoute <input type=hidden value=PUT -->
                            @csrf <!-- Ajoute <input type=hidden value=XXXXX -->
                            <div class="row">
                                 {{-- <div class="col-md-12 mb-3">
                                    <label for="title">Catégorie</label>
                                <input value="@if(old('categorie_id')) {{old('categorie_id')}} @else {{ $service->categorie_id }} @endif" placeholder="@if(old('categorie')) {{old('categorie')}} @else {{ $service->categorie_id }} @endif"
                                            name="categorie_id" type="text" class="form-control" >
                                </div> --}}





                                <select class="col-11 mx-auto text-center" name="categorie_id">
                                    <option value="{{($service->categorie_id)}}">{{$service->categorie->nom}}</option>
                                        @foreach($categories as $categorie)
                                        <option value="{{($categorie->id)}}">


                                            {{$categorie->nom}}</option>
                                        @endforeach
                                </select>
















                                <div class="col-md-12 mb-3">
                                    <label for="title">Nom</label>
                                    <input value="@if(old('nom')) {{old('nom')}} @else {{ $service->nom }} @endif" placeholder="@if(old('nom')) {{old('nom')}} @else {{ $service->nom }} @endif"
                                            name="nom" type="text" class="form-control mb-4 col-12 mx-auto policesnippet">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title">Description</label>
                                    <input value="@if(old('description')) {{old('description')}} @else {{ $service->description }} @endif" placeholder="@if(old('description')) {{old('description')}} @else {{ $service->description }} @endif"
                                            name="description" type="text" class="form-control mb-4 col-12 mx-auto policesnippet" >
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title">Prix</label>
                                    <input value="@if(old('prix')) {{old('prix')}} @else {{ $service->prix }} @endif" placeholder="@if(old('prix')) {{old('prix')}} @else {{ $service->prix }} @endif"
                                            name="prix" type="text" class="form-control mb-4 col-12 mx-auto policesnippet">
                                </div>



                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-block btn-primary"
                                                   value="Mettre à jour le service">
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


