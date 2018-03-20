<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// Let's truncate our existing records to start from scratch.
		// Categoria::truncate();

		$faker = \Faker\Factory::create();

		// And now, let's create a few articles in our database:
		for ($i = 0; $i < 20; $i++) {
			Categoria::create([
					'descricao' => $faker->word,
				]);
		}
	}
}
