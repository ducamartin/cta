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
            'epigrafe'=>'required:notas',
            'titulo'=>'required:notas',
            'cuerpo'=>'required:notas',
            'entrada'=>'required:notas',
          ],
          [
            'epigrafe.required' => 'El epigrafe es requerido (Max: 25 Caracteres)',
          'titulo.required' => 'El titulo es requerido (Max: 255 Caracteres)',
          'cuerpo.required' => 'El cuerpo de la noticia es requerido',
          'entrada.required' => 'La entrada es requerida (Max: 250 Caracteres)'
        ]);
        $notaAEditar = notas::find($id);
        $notaAEditar->epigrafe = $request->input('epigrafe');
        $notaAEditar->titulo = $request->input('titulo');
        $notaAEditar->cuerpo = $request->input('cuerpo');
        $notaAEditar->entrada = $request->input('entrada');
        $notaAEditar->save();
        return redirect ('index')->with('mensaje', 'Nota Editada Exitosamente');
        }




      public function show($id){
        $notas = notas::find($id);
          return view ('noticias')
          ->with([
            'notas' => $notas]);

      }


















    }
