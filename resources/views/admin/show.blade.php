@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h2 class="container mx-auto">{{$categorie->nom}}</h2>


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
