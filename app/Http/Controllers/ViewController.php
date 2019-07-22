<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
use Auth;

class ViewController extends Controller
{

   public function index(){
     return view('index');
   }

   public function contact(){
     return view('contacto');
   }
   public function indexNotas(){
     $notas = notas::all();
     if(isset($_GET[''])){
         $notas = notas::where('', 'LIKE', '%'.$_GET[''].'%')->paginate(10);
       } else{
         $notas = notas::orderBy('id','desc')->get();
       }
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

}
