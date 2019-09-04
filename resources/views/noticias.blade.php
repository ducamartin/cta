@extends('layouts.maindos')
@section('content')

@auth

      <div class="botonBorrar">
        <form class="" action="/borrarNota" method="post">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$notas->id}}">
          <input type="submit" name="" value="Borrar Nota" class="btn btn-danger">

        </form>

      </div>

<a class="btn btn-primary" href="/notas/editar/{{$notas->id}}">Editar Nota</a>


      @endauth
<div  class="notasID blockquote text-center">


<blockquote class="notasID blockquote text-center">
  <img src="/storage/{{$notas->img}}" class="card-img-top" alt="..." width="100px" height="100px">

<br>
<cite title="Source Title">{{$notas->epigrafe}}</cite>
    <div class="">

      <h1 class="acheuno" style="color:black;">{{$notas->titulo}}</h1>

        <div class="row justify-content-center nosotros">
          <div class="info col-md-8">

            <p class="entradaID text-justify" style="font-family:'Libre Franklin', sans-serif;">{{$notas->entrada}}</p>
</div>
</div>
</blockquote>



<blockquote>

<div class=" info col-md-8">

  <p class="">
    <?php echo "{$notas->cuerpo}"; ?>
  </p>
</div>
</blockquote>



<blockquote class="notasID blockquote text-center">
</div>



</blockquote>
