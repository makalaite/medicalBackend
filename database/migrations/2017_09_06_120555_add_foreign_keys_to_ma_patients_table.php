<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaPatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ma_patients', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_ma_patients_ma_roles1')->references('id')->on('ma_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ma_patients', function(Blueprint $table)
		{
			$table->dropForeign('fk_ma_patients_ma_roles1');
		});
	}

}
