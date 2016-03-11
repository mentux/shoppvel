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
			$pai = Shoppvel\Models\Categoria::find($faker->optional()->numberBetween(1,20));
            return $pai; 
        },
    ];
});

