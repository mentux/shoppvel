<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;
use Shoppvel\Models\Carrinho;
use Shoppvel\Models\Produto;
use Shoppvel\Models\Venda;
use Shoppvel\Models\VendaItem ;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller {

    public function getDashboard() {
        $models['qtdePedidos']['total'] = 10;
        $models['qtdePedidos']['pendentes-pagamento'] = 2;
        $models['qtdePedidos']['pagos'] = 8;
        $models['qtdePedidos']['finalizados'] = 7;
        return view('frente.cliente.dashboard', $models);
    }
    
    public function getPedidos($id = null) {
        if ($id == null) {
            $models['tipoVisao'] = 'Todos';
            $models['pedidos'] = \Auth::user()->vendas;
            return view('frente.cliente.pedidos-listar', $models);
        }
        
        $models['pedido'] = Venda::find($id);
        return view('frente.cliente.pedido-detalhes', $models);
    }
}
