<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaPatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ma_patients', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('last_name');
			$table->string('first_name');
			$table->dateTime('birth_date');
			$table->string('email');
			$table->string('phone');
			$table->string('gender');
			$table->string('password');
			$table->string('remember_token', 100);
			$table->string('role_id', 36)->index('fk_ma_patients_ma_roles1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ma_patients');
	}

}
