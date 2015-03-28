<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OneRepMax extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('1RM', function(Blueprint $table)
		{
			$table->stirng('bench');
            $table->stirng('squat');
            $table->stirng('deadlift');
            $table->stirng('overhead_press');
            $table->increments('id');
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
		Schema::table('1RM', function(Blueprint $table)
		{
			//
		});
	}

}
