<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('email')->index()->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('role', 20)->index()->default('user');
            $table->string('password', 60);
            $table->string('auth_token', 100)->index()->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
		Schema::drop('users');
	}

}
