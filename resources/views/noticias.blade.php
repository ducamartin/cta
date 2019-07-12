@extends('layouts.maindos')
@section('content')


<blockquote class="notasID blockquote text-center">
  <img src="/storage/{{$notas->img}}" class="card-img-top" alt="..." width="100px" height="100px">

<br>
<cite title="Source Title">{{$notas->epigrafe}}</cite>
    <div class="">

      <h1 class="text-uppercase">{{$notas->titulo}}</h1>

      <article class="container-fluid">
        <div class="row justify-content-center nosotros">
          <div class="info col-md-8">

            <p class=".entradaID text-justify">{{$notas->entrada}}</p>
            <p class="text-justify">{{$notas->cuerpo}}</p>

          </div>
        </div>
      </article>

@auth

      <div class="botonBorrar">
        <form class="" action="/borrarNota" method="post">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$notas->id}}">
          <input type="submit" name="" value="Borrar Nota" class="btn btn-danger">

        </form>

      </div>
<a href="/notas/editar/{id}">

  <input type="submit" name="" value="Editar Nota" class="class="btn btn-warning"">
</a>


      @endauth

</blockquote>
