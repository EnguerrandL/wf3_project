@extends('layouts.app')

@section('content')
<div class="container mw-100">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center policesnippet">

            <h2 class="container mx-auto">Edition catégorie: {{$categorie->nom}}</h2>


                      {{-- {{ $services->links() }} --}}


                      <table class="table table-hover table-bordered">

                            <thead class="thead-dark">




                    <tr class="text-center">
                        <th>Nom</th>
                        <th>Description </th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>

                </thead>
                <tr>
                     @foreach ($services as $service)

                    <td>{{$service->nom}}</td>
                    <td>{{$service->description}}</td>
                    <td>{{$service->prix}}€</td>
                    <td class="w-9 mx-auto"><a href="/admin/{{$service->id}}/edit"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>


                        <a href="{{ route('admin.destroy', $service->id) }}" onclick="event.preventDefault();document.getElementById('admin-form').submit();">
                        <button class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
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
            <br>
            <div class="col-md-6 mx-auto">
                    <a class="btn btn-block btn-primary"
                       href="{{ route('admin.index') }}">
                        Retourner à la liste des services
                    </a>
                </div>
        </div>
    </div>
</div>
@endsection
