<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ma_registrations', function(Blueprint $table)
		{
			$table->foreign('patient_id', 'fk_ma_registrations_ma_patients1')->references('id')->on('ma_patients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_ma_registrations_ma_users1')->references('id')->on('ma_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ma_registrations', function(Blueprint $table)
		{
			$table->dropForeign('fk_ma_registrations_ma_patients1');
			$table->dropForeign('fk_ma_registrations_ma_users1');
		});
	}

}
