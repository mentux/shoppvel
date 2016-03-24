<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;
use Shoppvel\Models\Carrinho;
use Shoppvel\Models\Produto;

class CarrinhoController extends Controller {

    private $carrinho = null;
    
    function __construct() {
        parent::__construct();
        $this->carrinho = new Carrinho();
    }
            
    function anyAdicionar(Request $request, $id) {
        if ($id == null) {
            return \Redirect::back()
                    ->withErrors('Nenhum código de produto informado para adicionar ao carrinho.');
        }        
        // se um id foi passado e a adição ao carrinho está ok
        if ($this->carrinho->add($id)) {
            return redirect()->route('carrinho.listar')
                    ->with('mensagens-sucesso', 'Produto adicionado ao carrinho');
        }
        
        return \Redirect::back()->withErrors('Erro ao adicionar produto no carrinho');
    }

    function getListar() {
        $models['itens'] = $this->carrinho->getItens();
        return view('frente.carrinho-listar', $models);
    }

    function getEsvaziar() {
        $this->carrinho->esvaziar();
        return redirect('/')->with('mensagens-sucesso','Carrinho vazio');
    }

}
