<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
      return view('cursos.index');
    }

    public function create(){
      return view('cursos.create');
    }

    public function show($curso){
      // Se utiliza compact si la variable y lo que se envía
      //  tiene el mismo nombre
      //return view('cursos.show', compact('curso'));
      return view('cursos.show', ['curso' => $curso]);
    }
}
