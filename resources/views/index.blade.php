@extends('layouts.main')

@section('content')
<br>
<div class="color">
  <article class="primero">
    <div class="col bd-example justify-content-center info">

      <h1>CTA AUTONOMA</h1>
      <h2>MISIONES</h2>
      <br>
      <br>

      <h6>------------------------------------------------------------------------------------------</h6>
      </div>

  </article>



  <article class="container-fluid">
    <div class="row justify-content-center nosotros">
      <div class="info col-md-8">
        <i class="far fas fa-users" id="uno"><br>
  <h2>Comisión Directiva</h2>
  </i>

<a href="http://ctanacional.org/dev/que-es-la-cta/">
  <i class="far fa-question-circle" id="dos">
  <br>
  <h2>
    ¿Qué es la CTA?
  </h2>
  </i>
</a>



  <i class="far fa-map 5x"  id="tres">
  <br>
  <h2>
    <p>CTAs Provincias</p>
  </h2>

  </i>


  <a href="http://ctanacional.org/dev/ficha-de-afiliacion-cta/">
  <i class="far fa-check-circle" id="cuatro">
  <br>
  <h2>
     Afiliarse
   </h2>
   </i>
 </a>


      </div>
    </div>
  </article>


<br>
<br>




<article class="container-fluid">
  <div class="row justify-content-center logos">


<a href="http://www.ctainternacionales.org"><img src="imagenes\internacionales.png" alt="">
</a>

<a href="http://www.agenciacta.org"> <img src="imagenes/ACTA.png" alt=""></a>


<a href="http://www.obderechosocial.org.ar"><img src="imagenes/ODS.png" alt=""></a>




    </div>

</article>

<br>
<article class="container-fluid">
  <div class="row justify-content-center">
    <div class="">
<a href="http://ctanacional.org/dev/"><img src="imagenes\cta-blanco.png" alt="">
</a>

    </div>
  </div>

</article>
</div>

<br>


<article class="container-fluid">

  <div class="row" style="background: white">


@foreach ($notas as $nota)

<div class="col">
  <div class="card">
    <img src="..." class="card-img-top" alt="..." width="30px" height="30px">
    <div class="card-body">
      <h5 class="card-title">{{$nota->titulo}}</h5>
      <ul>
        <li class="precio text-center"> {{$nota->epigrafe}}</li>
        <li class="precio text-center"> {{$nota->entrada}}</li>
      </ul>

      <a href="notas/{{$nota->id}}" class="btn btn-primary">Leer Más</a>
    </div>
  </div>
</div>
</div>
@endforeach


 @endsection
</article>
