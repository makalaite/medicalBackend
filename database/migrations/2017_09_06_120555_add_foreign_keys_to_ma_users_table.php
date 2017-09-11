<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ma_users', function(Blueprint $table)
		{
			$table->foreign('avatar_id', 'fk_ma_users_ma_files')->references('id')->on('ma_avatars')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ma_users', function(Blueprint $table)
		{
			$table->dropForeign('fk_ma_users_ma_files');
		});
	}

}
