<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class agregarNotas extends Controller
{


  // Validaciones
    // public function new(Request $req){
    //
    //   $this->validate($req,[])}

public function agregar(Request $req){
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


}
