<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;
use Shoppvel\Models\Carrinho;
use Shoppvel\Models\Produto;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller {

    private $carrinho = null;

    function __construct() {
        parent::__construct();
        $this->carrinho = new Carrinho();
    }

    public function postCheckout(Request $req) {
        echo('REDIRECT <br/>');
        dd($req->all());
    }

    public function postCheckoutNotification(Request $req) {
        echo('NOTIFICATON <br/>');
        dd($req->all());
    }

}
