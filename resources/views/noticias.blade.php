@extends('layouts.main')
@section('content')


@foreach ($notas as $nota)

<div class="col">
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$nota->titulo}}</h5>
      <ul>
        <li class="precio text-center"> {{$nota->epigrafe}}</li>
        <li class="precio text-center"> {{$nota->entrada}}</li>
        <li class ="precio text-center"> {{$nota->cuerpo}}</li>
      </ul>
    </div>
  </div>
  <div class="botonBorrar">
    <form class="" action="/borrarNota" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$nota->id}}">
    <input type="submit" name="" value="Borrar Nota" class="btn btn-danger">

    </form>

<p class="card-text">

<a class="btn btn-primary" href="/notas/editar/{{$nota->id}}">Editar Nota</a>

</p>
</div>
</div>
@endforeach
