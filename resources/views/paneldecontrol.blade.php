@extends('layouts.app')

@section('content')

<a href="{{'/'}}"> <button  type="submit" name="button" class="btn btn-primary">Volver a inicio</button></a>
  <a href="{{'/nuevaNota'}}"> <button  type="submit" name="button" class="btn btn-success">Nueva Nota</button></a>
<div class="container">
    <a class="nav-link active" href="{{'/'}}">INICIO</a>
    <div class="row justify-content-right">
        <h5> PANEL DE CONTROL </h5> <br>
        <div class="card">
            </div>
        </div>

</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nota</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                        <th scope="col">Publicar</th>
                    </tr>
                </thead>
                @foreach ($notas as $nota)
  <tbody>
    <tr>
      <th scope="row">{{$nota->id}}</th>
      <td> <a href="notas/{{$nota->id}}"> <p class="precio text-center font-italic"> {{$nota->titulo}}</p></a></td>
      <td></td>
      <td>  <div class="botonBorrar">
        <form class="" action="/borrarNota" method="post">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$nota->id}}">
        <input type="submit" name="" value="Borrar Nota" class="btn btn-danger">

        </form>

      </div></td>
      <td></td>
    </tr>
  </tbody>
</table>
@endforeach

</div>

    </div>
  </div>


  
</div>
            </div>
        </div>
    </div>
</div>
@endsection