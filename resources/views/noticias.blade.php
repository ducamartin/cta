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
</div>
@endforeach
