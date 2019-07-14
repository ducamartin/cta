@extends('layouts.notfooter')
@section('content')

<div class="container-fluid registro " style="background-color: #B8B8B8;">
  <div class="justify-content-center">


 <form method="post" action="/nuevoDoc" enctype="multipart/form-data">
   @csrf
   <h2>AGREGAR NUEVO DOCUMENTO</h2>


      <div class="form-group ">
          <label for="titulo">Titulo</label>
          <input class="form-control" type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
         @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div  class="form-group ">
        <label for="Documento">Documento</label>
        <textarea class="form-control" name="Documento" id="Documento"  value="{{ old('Documento') }}" rows="8" cols="50"></textarea>
        @error('Documento')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>


    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-success">B</button>
      <button type="button" class="btn btn-success">I</button>
      <button type="button" class="btn btn-success">U</button>
      <button type="button" class="btn btn-success">S</button>
      <button type="button" class="btn btn-success">LINK</button>
      <button type="button" class="btn btn-success">OCULTAR</button>
      <button type="button" class="btn btn-success">Quote</button>
      <button type="button" class="btn btn-success">LISTA</button>
    </div>

      <div  class="form-group ">
          <label for="texto">Texto</label>
          <textarea class="form-control" name="texto" id="texto"  value="{{ old('texto') }}" rows="8" cols="80"></textarea>
          @error('texto')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

   <!-- IMAGEN -->
      <div  class="form-group">
      <label for="imgDoc"></label>
      Agregar Documento<input class="form-control" type="file" name="imgDoc" value="">
      @error('imgDoc')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>



      <button type="submit" name="button" class="btn btn-primary">Subir Archivos$</button>

    </form>

   </div>


   </div>
@endsection
