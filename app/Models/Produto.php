<?php

namespace Shoppvel\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    
    public function scopeDestacado($query) {
        return $query->where('destacado', TRUE);
    }
}
