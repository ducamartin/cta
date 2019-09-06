@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <table class="table table-striped">
                @foreach ($notas as $nota)
  <thead>
    <tr>
      <th scope="col">Nota</th>
      <th scope="col">Titulo</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      <th scope="col">Publicar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$notas->id}}</th>
      <td>{{$notas->titulo}}</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
@endforeach
            </div>
        </div>
    </div>
</div>
@endsection