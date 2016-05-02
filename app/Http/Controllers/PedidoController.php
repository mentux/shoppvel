<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;
use Shoppvel\Models\Carrinho;
use Shoppvel\Models\Produto;
use Shoppvel\Models\Venda;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller {

    private $carrinho = null;

    function __construct() {
        parent::__construct();
        $this->carrinho = new Carrinho();
    }

    /**
     * Método que salva um pedido, chamado pelo Pagseguro ao redirecionar
     * de um pagamento realizado/iniciado.
     * 
     * Recebe por parâmetro de query string o transaction_id, que é a identificação
     * da transação no Pagseguro e será gravado junto com os dados do pedido
     * para poder recuperar informações de lá
     * 
     * @param Request $req
     */
    public function postCheckout(Request $req) {
        if ($req->has('transaction_id') === FALSE) {
            return back()->withErrors('Problemas ao receber a chave de trasação do Pagseguro, '
                    . 'este pedido não foi gravado');
        }
        
        $pedido = new Venda();
        
        $pedido->user = Auth::user();
        $pedido->data_venda = \Carbon\Carbon::now();
        $pedido->valor_venda = $this->carrinho->getTotal();
        $pedido->pagseguro_transaction_id = $req->transaction_id;
        
        
        
        dd($req->all());    
    }

    public function postCheckoutNotification(Request $req) {
        echo('NOTIFICATON <br/>');
        dd($req->all());
    }

}
