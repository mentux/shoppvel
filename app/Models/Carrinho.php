<?php

namespace Shoppvel\Models;

use Shoppvel\Models\Produto;
use Shoppvel\Models\CarrinhoItem;
use \Illuminate\Support\Collection;

/**
 * Carrinho não é um modelo do tipo Eloquent, e sim um modelo que gerencia
 * uma coleção de items de Produto na sessão
 */
class Carrinho {
    private $itens = null;
    
    public function __construct() {
        $this->itens = session('carrinho', new Collection());       
    }

    public function getItens() {
        return $this->itens;
    }
    
    private function addItem($item) {
        $this->itens->push($item);
        session(['carrinho' => $this->itens]);
    }
    
    public function add($id) {
        $p = Produto::find($id);
        
        if ($p == null) {
            return false;
        }
        
        $item = new CarrinhoItem();
        $item->produto = $p;
        $item->qtde = 1;
        $item->valor = 1 * $p->preco_venda;
        
        $this->addItem($item);

        return true;
    }

    public function esvaziar() {
        session()->forget('carrinho');    
    }
}
