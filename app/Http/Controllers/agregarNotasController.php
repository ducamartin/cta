<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class agregarNotas extends Controller
{





public function agregar(Request $req){
  $usuarioLog = Auth::user();
  if (  $usuarioLog == null) {
    return view ('/');
  }

    $nuevaNota = new notas ();

    $nuevaNota->titulo = $req->input('titulo');
    $nuevaNota->epigrafe = $req->input('epigrafe');
    $nuevaNota->cuerpo = $req->input('cuerpo');
    $nuevaNota->entrada = $req->input('entrada');


  // falta imagen



$nuevaNota ->save();
return redirect('/');

}

public function new(){
  $usuarioLog = Auth::user();
  if (  $usuarioLog == null) {
    return view ('index');
  }

  $titulo = titulo::all();
  $epigrafe = epigrafe::all();
  $cuerpo = cuerpo::all();
  $entrada = entrada::all();

  return view('nuevaNota')
  ->with([
    'titulo' => $titulo,
    'epigrafe' =>$epigrafe,
    'cuerpo' =>$cuerpo,
    'entrada' =>$entrada
  ]);

}

//
//
// public function edit($id){
//   $notas = notas::find($id);
//
//
//   return view('edit')->with([
//       'titulo' => $titulo,
//       'epigrafe' =>$epigrafe,
//       'cuerpo' =>$cuerpo,
//       'entrada' =>$entrada
//     ]);

}




}
