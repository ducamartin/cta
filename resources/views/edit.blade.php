@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Libre+Franklin|Montserrat|PT+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<div class="container-fluid registro " >
  <div class="justify-content-center">
  <a href="{{'/'}}"> <button  type="submit" name="button" class="btn btn-primary">Volver a inicio</button></a>
  <a href="{{'/paneldecontrol'}}"> <button  type="submit" name="button" class="btn btn-success">Panel de control</button></a>
  
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

             <form method="post" action="" enctype="multipart/form-data">
               @csrf
               <h2>Edición de Noticias</h2>
               <div class="">
                <div  class="form-group ">
                    <label for="epigrafe">Epigrafe</label>
                    <input class="form-control" type="text" name="epigrafe"
                    id="epigrafe" value="{{old('epigrafe', $notes->epigrafe)}}">
                   @error('epigrafe')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group ">
                    <label for="titulo">Titulo</label>
                    <input class="form-control" type="text" name="titulo" id="titulo" value="{{ old('titulo',$notes->titulo)}}">
                    @error('titulo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div  class="form-group">
                  <label for="entrada">Entrada</label>
                  
                <textarea class="form-control" name="cuerpo" id="" cols="8" rows="10">{{old('entrada',$notes->entrada)}}</textarea>
                  @error('entrada')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>



                <div  class="form-group">
                    <label for="cuerpo">Cuerpo</label>
                    <textarea class="form-control" name="cuerpo" id="" cols="30" rows="10">{{old('cuerpo',$notes->cuerpo)}}</textarea>
                    @error('cuerpo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div  class="form-group">
                    <label for="img">Imagen</label>
                    <img src="/storage/{{$notes->img}}" width="100px" alt="">
                    Cambiar imagen:<input class="form-control" type="file" name="img" value="">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                </div>
                <button type="submit" name="button" class="btn btn-primary">Guardar</button>
                </div>
                </div>
</div>



</div>
</div>
</div>
</div>

            </form>
          </div>
      </article>
  </section>


@endsection
