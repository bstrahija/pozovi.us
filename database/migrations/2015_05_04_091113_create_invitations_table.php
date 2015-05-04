<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('event_id')->unsigned()->index();
            $table->integer('user_id')->nullable()->unsigned()->index();
            $table->string('email')->index();
            $table->text('message')->nullable();
            $table->string('token')->nullable();
            $table->string('status', 20)->default('pending')->index();
			$table->timestamps();

            // Foreign keys
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('invitations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
