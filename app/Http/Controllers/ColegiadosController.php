<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ColegiadosForm;

class ColegiadosController extends Controller
{


public function index()
{
	return view("postulante.colegiados");
}


/**
* Graba registro de nuevo colegiados
*
* @return Response
*/
public function store(ColegiadosForm $postForm)
{
	$post = new \App\Colegiados;
	$post->nombres = \Request::input('nombres');
	$post->apellido_paterno = \Request::input('apellido_paterno');
	$post->apellido_materno = \Request::input('apellido_materno');
	$post->especialidad = \Request::input('especialidad');
	$post->region = \Request::input('region');
	$post->departamento = \Request::input('departamento');
	$post->universidad = \Request::input('universidad');
	$post->sexo = \Request::input('sexo');
	$post->dni = \Request::input('dni');
	$post->fechanac = \Request::input('fechanac');
	$post->correo = \Request::input('correo');
	$post->direccion = \Request::input('direccion');
	$post->telefono = \Request::input('telefono');
	$post->save();

	return view('postulante.responseColegiados')->with('message', 'registro...!!');
}

}
