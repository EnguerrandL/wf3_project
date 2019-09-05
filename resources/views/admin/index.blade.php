@extends('layouts.app')

@section('content')


<a href="{{ route('home') }}" class="col-2 mx-auto mt-2 btn btn-warning">Retourner sur le site</a>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


        @if (session()->has('message'))
<div class="col-6 mx-auto text-center alert alert-warning mt-5" role="alert">
    {{ session()->get('message') }}
</div>
@endif
@if (session()->has('autre'))
<div class="col-6 mx-auto text-center alert alert-danger mt-5" role="alert">
    {{ session()->get('autre') }}
</div>
@endif
                    <p> 1 = Hammam, 2 = UV, 3 = Soins, 4 = Mainpied, 5 = épilation, 6 = massage, 7 = CelluM6</p>

                    <form class="form-inline container mx-auto">
                        <input class="" type="text" placeholder="Recherche" aria-label="Search">
                        <button class="btn btn-outline-success btn-rounded" type="submit">Recherche</button>
                      </form>

                      <a class="container mx-auto" href="/create"><button class=" mb-4 col-4 btn btn-primary btn-sm my-0" type="submit">Ajouter un service</button></a>

                      {{ $services->links() }}


                           <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                             <tr>
                        <th>Nom</th>
                        <th>Description </th>
                        <th>Prix</th>
                        <th>Categorie</th>
                        <th>Actions</th>
                    </tr>

                </thead>
                <tr>
                     @foreach ($services as $service)

                    <td>{{$service->nom}}</td>
                    <td>{{$service->description}}</td>
                    <td>{{$service->prix}}</td>
                    <td>{{$service->categorie_id}}</td>

                    <td><a href="/admin/{{$service->id}}/edit"><button class="btn btn-primary">Editer</button></a>


                        <a href="{{ route('admin.destroy', $service->id) }}" onclick="event.preventDefault();document.getElementById('admin-form').submit();">
                        <button class="btn btn-danger my-2">Supprimer</button>
                     </a>



                     <form id="admin-form" action="{{ '/admin/destroy/' .  $service->id }}"  style="display: none;">
                            @csrf
                            @method('DELETE')
                            <input type="submit">ok</input>
                        </form>

                    </td>

                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
