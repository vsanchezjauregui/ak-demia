<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('id_mun')->nullable();
            $table->enum('gender', array('male','female'));
            $table->integer('cell_phone');
            $table->integer('home_phone')->nullable();
            $table->integer('work_phone')->nullable();
            $table->string('nationality');
            $table->string('degree')->nullable();
            $table->integer('province');
            $table->integer('canton');
            $table->integer('district');
            $table->string('address')->nullable();
            
            $table->foreign('nationality')->references('iso3166a1')->on('countries');
            
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
        Schema::dropIfExists('teachers');
    }
}