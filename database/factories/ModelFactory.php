<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

//$faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

$factory->define(Shoppvel\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Shoppvel\Models\Categoria::class, function (Faker\Generator $faker) {
    $faker->locale('pt_BR');

    return [
        'nome' => $faker->unique()->word,
        'categoria_id' => function () use ($faker) {
            $pai = Shoppvel\Models\Categoria::find($faker->optional()->numberBetween(1, 20));
            return $pai;
        },
    ];
});

$factory->define(Shoppvel\Models\Marca::class, function (Faker\Generator $faker) {
    $faker->locale('pt_BR');

    return [
        'nome' => $faker->unique()->company,
    ];
});

$factory->define(Shoppvel\Models\Produto::class, function (Faker\Generator $faker) {
    $faker->locale('pt_BR');

    return [
        'nome' => $faker->text(50),
        'descricao' => $faker->paragraphs,
        'avaliacao_qtde' => $faker->randomNumber(3),
        'avaliacao_total' => $faker->numberBetween(0,5),
        'qtde_estoque' => $faker->numberBetween(0,50),
        'preco_venda' => $faker->randomFloat(2,10,5000),
        'destacado' => $faker->boolean(),
        'marca_id' => function () use ($faker) {
            $marca = Shoppvel\Models\Marca::find($faker->optional()->numberBetween(1, 20));
            return $marca;
        },
        'categoria_id' => function () use ($faker) {
            $categoria = Shoppvel\Models\Categoria::find($faker->optional()->numberBetween(1, 20));
            return $categoria;
        },
    ];
});

