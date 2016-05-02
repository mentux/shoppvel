<?php

namespace Shoppvel\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo de acesso aos dados de venda, tratados na frente como Pedidos.
 * O cliente de um pedido internamente é associado ao usuário que logou na 
 * aplicação
 */
class Venda extends Model {
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function itens() {
        return $this->hasMany(Categoria::class);
    }
    
    public function scopeDestacado($query) {
        return $query->where('destacado', TRUE);
    }
}
