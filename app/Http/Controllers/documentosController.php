<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class documentosController extends Controller
{


public function ver(){
  return view ('documentos');
}


public function vista (Request $req){
  $usuarioLog = Auth::user();
  if (  $usuarioLog == null) {
    return view ('index');
  }
  return view ('/nuevoDoc');

}


public function agregar(Request $req){
  $usuarioLog = Auth::user();
  if (  $usuarioLog == null) {
    return view ('/');
  }

$this->validate($req, [

'titulo'=>'required:documento',
'documento'=>'required:documento',
'texto'=>'required:documento',
'imgDoc'=> 'file'

],
[
'titulo.required' => 'Inserte el titulo',
'texto.documento' => 'Inserte el Documento',
'texto.required' => 'Inserte el cuerpo de la noticia',
'imgDoc.file' => 'La imagen no es correcta'


]);

  $nuevoDoc = new document ();

  $rutaDoc = $req->file('imgDoc')->store("public");
  $nombreDoc=basename($rutaDoc);


  $nuevoDoc->titulo = $req->input('titulo');
  $nuevoDoc->documento = $req->input('documento');
  $nuevoDoc->texto = $req->input('texto');
  $nuevoDoc->img = $nombreDoc;
  $nuevoDoc ->save();
  return view ('/');

}


}
