<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioSaludo;
use App\Models\Saludo;
use Illuminate\Http\Request;

class HolaController extends Controller
{

  private $saludo;

  function __construct()
  {
    $this->saludo = new Saludo;
  }

  public function saludar(FormularioSaludo $request)
  {
    $this->saludo = $request->saludo;
    $this->saludo->save();
    return redirect()->route("listar");
  }

  public function saludos()
  {
    $saludos = $this->saludo::all();
    return view("saludos", compact("saludos"));
  }

  function editar(Request $request, $id)
  {
    $saludo =  $this->saludo::find($id);

    return view("editar", compact("saludo"));
  }

  function actualizar(Request $request, $id)
  {
    $saludo =  $this->saludo::find($id);
    $saludo->saludo = $request->saludo;
    $saludo->save();
    return redirect()->route("listar");
  }

  function eliminar($id)
  {
    $saludo =  $this->saludo::find($id);

    $saludo->delete();
    return redirect()->route("listar");
  }
}
