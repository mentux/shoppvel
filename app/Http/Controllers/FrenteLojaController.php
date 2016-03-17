<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;

class FrenteLojaController extends Controller {

    function getIndex() {
        $models['categorias'] = \Shoppvel\Models\Categoria::all();
        $models['produtos'] = \Shoppvel\Models\Produto::destacado()->get();
        return view('frente.entrada', $models);
    }

}
