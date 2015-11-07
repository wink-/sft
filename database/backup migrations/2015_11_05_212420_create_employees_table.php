<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Employee', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->string('Initials', 255);
			$table->string('Code', 255);
			$table->string('Name', 255);
			$table->text('Signature');
			$table->dateTime('TimeStamp');
			$table->boolean('Production');
			$table->integer('Supervisor');
			$table->string('Pin', 255);
			$table->text('Note');
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
		Schema::drop('Employee');
	}

}
