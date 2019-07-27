<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCareersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('careers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('career_name', 30)->unique();
			$table->string('career_description');
			$table->integer('id_faculty');
			$table->string('career_level', 10);
			$table->integer('career_modality');
			$table->integer('career_duration');
			$table->integer('career_cheif');
            $table->rememberToken();
            
            $table->foreing('id_faculty')->references('id')->on('faculties');
            $table->foreing('career_cheif')->references('id')->on('teachers');
            
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
		Schema::drop('careers');
	}

}
