<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('data_venda');
            $table->float('valor_venda');
            $table->string('pagseguro_transaction_id');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
        
        Schema::create('item_vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('qtde');
            $table->float('valor_venda');
            $table->integer('venda_id')->unsigned();
            $table->foreign('venda_id')->references('id')->on('vendas');
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('vendas');
        Schema::drop('item_vendas');
    }

}
