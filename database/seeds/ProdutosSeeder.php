<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        dd(factory(Shoppvel\Models\Produto::class, 2)->make());
    }

}
