@extends('layouts.notfooter')
@section('content')
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contacto</title>
  </head>
  <body style="background-color:#050B7A!important">

    <div class="contacto" >
      <div class="">


      <div class=" row justify-content-center ">
          <div class="col-md-4">
            <h2 class="text-center">
              ¿Donde Estamos?
            </h2>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.2042630267206!2d-55.90399783441521!3d-27.36933549476375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9457be3766252e3d%3A0x78899dbc1167b08f!2sAv.+Corrientes+2150%2C+N3300NAK+Posadas%2C+Misi%C3%B3nes!5e0!3m2!1ses!2sar!4v1560982360715!5m2!1ses!2sar" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

                </div>
                <div class="contactotext">

                <div class="justify-content-center ">

                      <p class="text-center" text-center>MISIONES</p>
                <p class="text-center">Av. Corrientes 2150, Posadas</p>

            <a href="tel: 0376 442-8901"><p class="text-center">Telefono: 0376 442-8901</p></a>
            <a href="mailto:user@user?subject=feedback">
              <p class="text-center">mail@prensa.cta</p>
            </a>
              </div>

              </div>
    </div>
    <div class=" row justify-content-center ">

    <div class=" col-md-4">
      <div class="contactomail">

      <div class="">
        <h3 class="text-center">Comunicate con nosotros</h3>
      </div>
      <form class="contacto">
        <div class="form-group">
          <label for="email" class="" class="text-center">Ingrese su Email</label>
          <input type="email" class="form-control" id="email" placeholder="su@mail.com">
        </div>
        <div class="form-group">
          <label for="comentario" class="" class="text-center">Dejanos tu comentario</label>
          <textarea class="form-control" id="comentario" rows="12"></textarea>
        </div>
        <div class="boton">
          <div class="form-group">
            <input type="submit" name="" value="ENVIAR">
          </div>
        </div>
      </form>
    </div>
    </div>

    </div>
    </div>

  </body>
</html>
