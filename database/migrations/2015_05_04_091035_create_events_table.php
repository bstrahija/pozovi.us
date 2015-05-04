<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('uid', 30)->nullable()->unique()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('start_at')->nullable()->index();
            $table->timestamp('ends_at')->nullable()->index();
            $table->string('status', 20)->index()->default('draft');
			$table->timestamps();

            // Foreign keys
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
		Schema::drop('events');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
