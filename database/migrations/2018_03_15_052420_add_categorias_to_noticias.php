<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\Schema;

class AddCategoriasToNoticias extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::table('noticias', function ($table) {
				$table->integer('categoria_id')->unsigned()->nullable();
				$table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}
}
