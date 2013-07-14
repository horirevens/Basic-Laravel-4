<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('address', 100);
            $table->enum('gender', array('M','F'))->default('M');
            $table->date('dob');
            $table->enum('active', array('1','0'))->default('1');
            $table->string('creator', 30);
            $table->string('updater', 30);
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
        Schema::drop('authors');
    }

}
