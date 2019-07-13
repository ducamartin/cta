@extends('layouts.main')

@section('content')

<div class="row" style="background: white">


@foreach ($notas as $nota)
<div class="row">

<div class="col-sm-6">
<div class="card" style="width: 18rem;">

  <div class="card-body">
    <p class="precio text-center font-italic"> {{$nota->epigrafe}}</p>
     <img src="/storage/{{$nota->img}}" class="card-img-top" alt="...">
    <h5 class="card-title text-center text-uppercase">{{$nota->titulo}}</h5>

      <p class="precio text-justify"> {{$nota->entrada}}</p>



<a href="notas/{{$nota->id}}">
<input type="submit" name="" value="Ver Más"class="btn btn-primary">

</a>

@auth
    <div class="botonBorrar">
      <form class="" action="/borrarNota" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$nota->id}}">
      <input type="submit" name="" value="Borrar Nota" class="btn btn-danger">

      </form>

    </div>

@endauth
  </div>

  </div>
</div>
</div>

@endforeach


{{$notas->links()}}
</div>
@endsection
