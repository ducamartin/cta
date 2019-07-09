@extends('layouts.notfooter')
@section('content')

<div class="container-fluid registro " style="background-color: #B8B8B8;">
  <div class="justify-content-center">


 <form method="post" action="/nuevaNota" enctype="multipart/form-data">
   @csrf
   <h2>AGREGAR NUEVA NOTA</h2>


   <div  class="form-group col-md-4">
     <label for="epigrafe">Epigrafe</label>
     <input class="form-control" type="text" name="epigrafe" id="epigrafe" value="{{ old('epigrafe') }}">
     @error('epigrafe')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
   </div>

   <div class="form-group col-md-4">
       <label for="titulo">Titulo</label>
       <input class="form-control" type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
      @error('titulo')
         <div class="alert alert-danger">{{ $message }}</div>
     @enderror
   </div>

   <div  class="form-group col-md-4">
     <label for="entrada">Entrada</label>
     <textarea class="form-control" name="entrada" id="entrada"  value="{{ old('entrada') }}" rows="8" cols="50"></textarea>
     @error('entrada')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
   </div>



   <div  class="form-group col-md-4">
       <label for="cuerpo">Cuerpo</label>
       <textarea class="form-control" name="cuerpo" id="cuerpo"  value="{{ old('cuerpo') }}" rows="8" cols="80"></textarea>
       @error('cuerpo')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
   </div>

<!-- IMAGEN -->
   <div  class="form-group col-md-4">
   <label for="imgNota">Imagen de la noticia</label>
   Agregar Imagen<input class="form-control" type="file" name="imgNota" value="">
   @error('imgProduct')
   <div class="alert alert-danger">{{ $message }}</div>
   @enderror
 </div>



   <button type="submit" name="button" class="btn btn-primary">Subir Nota</button>

 </form>

</div>


</div>
@endsection
