<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medias', function (Blueprint $table) {
			$table->increments('id');
			$table->string('legend');
			$table->string('filename');
			$table->string('table');
			$table->string('extern_id');
			$table->timestamps();
		});

		Schema::table('medias', function($table) {
			$table->foreign('extern_id')->references('id')->on('competitions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('medias');
	}
}
