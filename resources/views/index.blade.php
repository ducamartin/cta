@extends('layouts.main')

@section('content')
<div class="color">
<br>
<br>
  <article class="primero">
  <div class="col bd-example justify-content-center info">
  <article class="container-fluid">
  <div class="row justify-content-center">
  <div class="">
  <a href="http://ctanacional.org/dev/"><img src="imagenes\cta-blanco.png" alt="">
  </a>
  </div>
  </div>

</article>
<br>
<br>
<br>
<br>


      <h6>------------------------------------------------------------------------------------------</h6>
      <br>
      </div>

  </article>



<a href="{{'/cd'}}">

  <article class="container-fluid">
    <div class="row justify-content-center nosotros">
      <div class="info col-md-8">
        <i class="far fas fa-users fa-3x" id="uno"><br>
  <h4>Comisión Directiva Provincial</h4>
  </i>

</a>
<a href="http://ctanacional.org/dev/que-es-la-cta/">
  <i class="far fa-question-circle fa-3x" id="dos">
  <br>
  <h4>
    ¿Qué es la CTA?
  </h4>
  </i>
</a>


  <a href="{{'/afiliarse'}}">
  <i class="far fa-check-circle fa-3x" id="cuatro">
  <br>
  <h4>
     Afiliarse
   </h4>
   </i>
 </a>


      </div>
    </div>
  </article>


<br>
<br>


  
    <div class="col bd-example justify-content-center info">
      <h6>------------------------------------------------------------------------------------------</h6>
      </div>

<article class="container-fluid">
  <div class="row justify-content-center logos">


<a href="http://www.ctainternacionales.org"><img src="imagenes\internacionales.png" alt="">
</a>

<a href="http://www.agenciacta.org"> <img src="imagenes/ACTA.png" alt=""></a>


<a href="http://www.obderechosocial.org.ar"><img src="imagenes/ODS.png" alt=""></a>




    </div>

</article>

<br>
</div>


@auth
<a href="{{'/nuevaNota'}}">

  <input type="submit" name="Nueva Nota" value="Nueva Nota" class="btn btn-success">
</a>
@endauth
<article class="noticiasIndex container-fluid">

  <div class="elementor-widget-container">
    <h3 class="elementor-heading-title elementor-size-default">Noticias</h3>	
  </div>
  <br>
  <div class="busqueda row justify-content-left">
        <div class="col-xs-12 col-sm-6 col-md-6 filtroBusqueda">
          <form class="" action="" method="get">
            <div class="row">
              <div class="col-xs-9 col-sm-8 col-md-8 search">
                <input type="text" name="name" value="" class="cuadroBusqueda form-control" placeholder="Buscar Nota">
              </div>
              <div class="col-xs-3 col-sm-4 col-md-4 search">
                <button type="submit" class="btn btn-block btn-primary botonBusqueda" >Buscar</button>
              </div>
            </div>
          </form>

        </div>
      </div>
      <div class="row" style="background: white">

@foreach ($notas as $nota)
<div class="row">

<div class="col-sm-6">
  <div class="card" style="width: 18rem;">

    <div class="card-body">
      <p class="precio text-center font-italic"> {{$nota->epigrafe}}</p>
       <img src="/storage/{{$nota->img}}" class="card-img-top" alt="...">
    <a href="notas/{{$nota->id}}">
     <h5 class="card-title text-center">{{$nota->titulo}}</h5>
    </a> 
    

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


  <div class="row">
  Noticias
  ACTA    
</div>

</div>


@endforeach
{{ $notas->links() }}


</div>


 @endsection
</article>
