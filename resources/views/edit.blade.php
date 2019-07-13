@extends('layouts.notheadfoot')

@section('content')
  <section class="principal">
       <article class="editNotas" id="editNotas">
           <div class="noticiasAeditar">

             <form method="post" action="" enctype="multipart/form-data">
               @csrf
               <h2>Edición de Noticias</h2>
               <div class="form-row">
                <div  class="form-group col-md-4">
                    <label for="epigrafe">Epigrafe</label>
                    <input class="form-control" type="text" name="epigrafe"
                    id="epigrafe" value="{{old('epigrafe', $notes->epigrafe)}}">
                   @error('epigrafe')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="titulo">Titulo</label>
                    <input class="form-control" type="text" name="titulo" id="titulo" value="{{ old('titulo',$notes->titulo)}}">
                    @error('titulo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div  class="form-group col-md-4">
                  <label for="entrada">Entrada</label>
                  <textarea class="form-control" name="entrada" id="entrada"  value="{{old('entrada',$notes->entrada)}}" rows="8" cols="50"></textarea>
                  @error('entrada')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>



                <div  class="form-group col-md-4">
                    <label for="cuerpo">Cuerpo</label>
                    <textarea class="form-control" name="cuerpo" id="cuerpo"  value="{{old('cuerpo',$notes->cuerpo)}}" rows="8" cols="80"></textarea>
                    @error('cuerpo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div  class="form-group col-md-4">
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


            </form>
          </div>
      </article>
  </section>



@endsection
