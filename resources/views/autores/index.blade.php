@extends('home')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <br>
    <h3>Lista de Autores</h3>
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
                <th scope="col">Autor</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autores as $autor)
            <tr class="">
                <td scope="row"> {{$autor->id}}</td>
                <td>{{$autor->autor}}</td>
                   <!-- Button trigger modal -->
                <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$autor->id}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$autor->id}}">
                 Eliminar
               </button>
            </td>
            </tr>
            @include('autores.info')

            @endforeach
        </tbody>
    </table>
</div>
@include('autores.create')

    <div class="col-md-2"></div>
</div>
@endsection
