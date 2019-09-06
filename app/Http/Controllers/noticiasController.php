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
        $notaAEditar->epigrafe = $request->epigrafe;
        $notaAEditar->titulo = $request->titulo;
        $notaAEditar->cuerpo = $request->cuerpo;
        $notaAEditar->entrada = $request->entrada;


        if ($request->file('img')) {
          if ($notaAEditar->img) {
            Storage::disk('public')->delete($notaAEditar->img);
          }
          $rutaDelArchivo = $request->file('img')->store('public');
            $nombreArchivo = basename($rutaDelArchivo);
            $peliculaAEditar->poster = $nombreArchivo;
        }
        $notaAEditar->save();
        return redirect ('/')->with([
      'mensaje', 'Producto eliminadoi exitosamente!']);
        }




      public function show($id){
        $notas = notas::find($id);
          return view ('noticias')
          ->with([
            'notas' => $notas]);

      }

          public function ver(){
            $notas = notas::orderBy('id','desc')->paginate(10);
            return view('catalogo')
            ->with([
              'notas' => $notas]);
          }


public function control(){
  
  return view ('paneldecontrol');
}













    }
