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



        public function view(){
        return view('notas/{id}');
      }

}
