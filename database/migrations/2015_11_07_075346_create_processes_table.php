<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Process', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('PROCNAME', 255);
			$table->string('DESCRIPT', 255);
			$table->float('MINCOST', 10, 0);
			$table->integer('ID', true);
			$table->dateTime('TimeStamp');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
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
		Schema::drop('Process');
	}

}
