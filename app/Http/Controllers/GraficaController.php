<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficaController extends Controller
{

  /*Constructor para checar si esta logeado*/
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function grafica()
  {
    return view('grafica/grafica');
  }
  public function mensual()
  {
    
  }
}
