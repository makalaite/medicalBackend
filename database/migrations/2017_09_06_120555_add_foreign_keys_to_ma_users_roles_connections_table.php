<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaUsersRolesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ma_users_roles_connections', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_ma_users_roles_connections_ma_roles1')->references('id')->on('ma_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_ma_users_roles_connections_ma_users1')->references('id')->on('ma_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ma_users_roles_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_ma_users_roles_connections_ma_roles1');
			$table->dropForeign('fk_ma_users_roles_connections_ma_users1');
		});
	}

}
