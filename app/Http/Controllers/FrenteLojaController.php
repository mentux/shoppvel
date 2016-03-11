<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;

use Shoppvel\Http\Requests;

class FrenteLojaController extends Controller
{
    function getIndex() {
		$models['categorias'] = \Shoppvel\Models\Categoria::all();
		return view('layouts.frente-loja', $models);
	}
}
