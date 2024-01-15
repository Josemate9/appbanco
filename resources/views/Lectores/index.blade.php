@extends('home')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <br>
    <h3>Lista de Lectores</h3>
    <br>
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
   Nuevo
  </button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lectores as $lector)
            <tr class="">
                <td scope="row"> {{$lector->id}}</td>
                <td>{{$lector->nombre}}</td>
                <td>{{$lector->apellido}}</td>
                <td>{{$lector->telefono}}</td>
                <td>{{$lector->direccion}}</td>
                   <!-- Button trigger modal -->
                <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$lector->id}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$lector->id}}">
                 Eliminar
               </button>
            </td>
            </tr>
            @include('Lectores.info')

            @endforeach
        </tbody>
    </table>
</div>
@include('Lectores.create')
    <div class="col-md-2"></div>
</div>
@endsection
