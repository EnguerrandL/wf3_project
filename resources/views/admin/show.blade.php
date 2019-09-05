@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">




                    <p> 1 = Hammam, 2 = UV, 3 = Soins, 4 = Mainpied, 5 = épilation, 6 = massage, 7 = CelluM6</p>

                    <form class="form-inline container mx-auto">
                        <input class="" type="text" placeholder="Recherche" aria-label="Search">
                        <button class="btn btn-outline-success btn-rounded" type="submit">Recherche</button>
                      </form>

                      <a class="container mx-auto" href="/create"><button class=" mb-4 col-4 btn btn-primary btn-sm my-0" type="submit">Ajouter un service</button></a>

                      {{-- {{ $services->links() }} --}}


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
                    <td>{{$service->categorie->nom}}</td>

                    <td><a href="/admin/{{$service->id}}/edit"><button class="btn btn-primary">update</button></a>


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
