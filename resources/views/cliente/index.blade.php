@extends('home')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <br>
    <h3>Lista de Clientes</h3>
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
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr class="">
                <td scope="row"> {{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->correo}}</td>
                   <!-- Button trigger modal -->
                <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$cliente->id}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$cliente->id}}">
                 Eliminar
               </button>
            </td>
            </tr>
            @include('cliente.info')

            @endforeach
        </tbody>
    </table>
</div>
@include('cliente.create')

    <div class="col-md-2"></div>
</div>
@endsection