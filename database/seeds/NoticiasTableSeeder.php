<?php

use App\Noticia;
use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		// Let's truncate our existing records to start from scratch.
		Noticia::truncate();

		$faker = \Faker\Factory::create();

		// And now, let's create a few articles in our database:
		for ($i = 0; $i < 50; $i++) {
			Noticia::create([
					'titulo'       => $faker->sentence,
					'corpo'        => $faker->paragraph,
					'categoria_id' => rand(1, 20),
				]);
		}
	}
}
