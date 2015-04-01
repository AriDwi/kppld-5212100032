<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('lokasi');
			$table->string('jasa');
			$table->string('biaya_servis');
			$table->integer('jenis_kepemilikan');
			$table->string('kontak');
			$table->string('jam_buka');
			$table->string('rekomendasi');
			$table->string('review');
			$table->integer('rating');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('services');
	}

}
