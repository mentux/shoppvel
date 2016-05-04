<?php

namespace Shoppvel\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo de cada item de venda (produto) relacionado a uma venda
 */
class ItemVenda extends Model {
    protected $table = 'itens_venda';
    
    public function venda() {
        return $this->belongsTo(Venda::class);
    }
}
