@extends('layouts.maindos')
@section('content')



<blockquote class="notasID blockquote text-center">
  <img src="/storage/{{$notas->img}}" class="card-img-top" alt="..." width="100px" height="100px">

<br>
<cite title="Source Title">{{$notas->epigrafe}}</cite>
    <div class="">

      <h1 class="acheuno text-uppercase" style="color:black;">{{$notas->titulo}}</h1>
      <a class="twitter-share-button"
        href="https://twitter.com/intent/tweet">
      Tweet</a>

        <div class="row justify-content-center nosotros">
          <div class="info col-md-8">

            <p class="entradaID text-justify" style="font-family:'Libre Franklin', sans-serif;">{{$notas->entrada}}</p>
</div>
</div>
</blockquote>



<blockquote class="blockquote text-justify">


  <p class="col-sm-6">
    <?php echo "{$notas->cuerpo}"; ?>

  </p>
</blockquote>



<blockquote class="notasID blockquote text-center">

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

</blockquote>
