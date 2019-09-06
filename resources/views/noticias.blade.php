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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

 

<br>
<cite title="Source Title">{{$notas->epigrafe}}</cite>


      <h1 class="acheuno" style="color:black;">{{$notas->titulo}}</h1>
      <p class="entradaID" style="font-family:'Libre Franklin', sans-serif;">{{$notas->entrada}}</p>
      <img src="/storage/{{$notas->img}}" class="card-img-top" alt="..." width="100px">







  <p class="" style="">
    <?php echo "{$notas->cuerpo}"; ?>
  </p>



          </div>
      </div>
    </div>
</div>