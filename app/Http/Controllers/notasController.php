<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
use App\Http\Controllers\notasController;
use Auth;

class notasController extends Controller
{



  public function vista (Request $req){
    $usuarioLog = Auth::user();
    if (  $usuarioLog == null) {
      return view ('index');
    }
    return view ('/nuevaNota');

  }


  public function agregar(Request $req){
    $usuarioLog = Auth::user();
    if (  $usuarioLog == null) {
      return view ('/');
    }

$this->validate($req, [

  'titulo'=>'required:notas',
  'epigrafe'=>'required:notas',
  'cuerpo'=>'required:notas',
  'entrada'=>'required:notas',
  'imgNota'=> 'file'

],
[
'titulo.required' => 'Inserte el titulo (Max: 255 Caracteres)',
'epigrafe.required' => 'Inserte el epigrafe (Max: 25 Caracteres)',
'cuerpo.required' => 'Inserte el cuerpo de la noticia',
'entrada.required' => 'Inserte la entrada (Max: 250 Caracteres)',
'imgNota.file' => 'La imagen no es correcta'


]);

    $nuevaNota = new notas ();

    $ruta = $req->file('imgNota')->store("public");
    $nombreArchivo=basename($ruta);


    $nuevaNota->titulo = $req->input('titulo');
    $nuevaNota->epigrafe = $req->input('epigrafe');
    $nuevaNota->cuerpo = $req->input('cuerpo');
    $nuevaNota->entrada = $req->input('entrada');
    $nuevaNota->img = $nombreArchivo;
    $nuevaNota ->save();
    return view ('/nuevaNota');

  }

  public function borrar(Request $req){
    $usuarioLog = Auth::user();
    if (  $usuarioLog == null) {
      return view ('index');
    }
    $id = $req ['id'];
    $notas = notas::find($id);
    $notas->delete();
    return redirect('/');
  }



  }
