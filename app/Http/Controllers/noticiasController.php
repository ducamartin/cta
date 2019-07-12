<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;


class noticiasController extends Controller
{

    public function index(){
      $notas = notas::all();
      return view('noticias')
      ->with([
        'notas' => $notas]);

      }



      public function borrar(Request $req){
        $usuarioLog = Auth::user();
        if (  $usuarioLog == null) {
          return view ('/');
        }
        $id = $req ['id'];
        $notas = notas::find($id);
        $notas->delete();
        return redirect('/');
      }



      public function edit($id){
        $notes = notas::find($id);
        return view ('edit') -> with([
          'notes' => $notes
        ]);
      }
      public function update($id, Request $request){
        $this->validate($request,[
          'titulo'=>'required:notas',
          'epigrafe'=>'required:notas',
          'cuerpo'=>'required:notas',
          'entrada'=>'required:notas',
        ],
        [
        'titulo.required' => 'El titulo es requerido (Max: 255 Caracteres)',
        'epigrafe.required' => 'El epigrafe es requerido (Max: 25 Caracteres)',
        'cuerpo.required' => 'El cuerpo de la noticia es requerido',
        'entrada.required' => 'La entrada es requerida (Max: 250 Caracteres)'
      ]);
      $notaAEditar = notas::find($id);
      $notaAEditar->titulo = $request->titulo;
      $notaAEditar->epigrafe = $request->epigrafe;
      $notaAEditar->cuerpo = $request->cuerpo;
      $notaAEditar->entrada = $request->entrada;
      $notaAEditar->save();
      return redirect ('/')->with('mensaje', 'Nota Editada Exitosamente');
      }




      public function show($id){
        $notas = notas::find($id);
          return view ('noticias')
          ->with([
            'notas' => $notas]);

      }


















    }
