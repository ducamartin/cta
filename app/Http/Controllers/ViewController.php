<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
use Auth;

class ViewController extends Controller
{

   public function index(){
     return view('index');
     if(isset($_GET['name'])){
         $notas = notas::where('name', 'LIKE', '%'.$_GET[''].'%')->paginate(10);
       } else{
         $notas = notas::orderBy('id','desc')->get();
       }
   }

   public function contact(){
     return view('contacto');
   }
   public function indexNotas(){
     $notas = notas::orderBy('id','desc')->paginate(10);
     return view('index')
     ->with([
       'notas' => $notas]);
}



public function cd(){
  return view ('comisionDirectiva');
}


public function afiliarse(){
  return view ('afiliacion');
}




public function provincias(){
  return view ('provincias');
}





}
