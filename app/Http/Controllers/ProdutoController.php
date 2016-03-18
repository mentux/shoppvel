<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;

class ProdutoController extends Controller {

    function getProdutoDetalhes($id) {
        $models['produto'] = \Shoppvel\Models\Produto::find($id);
        return view('frente.produto-detalhes', $models);
    }

}
