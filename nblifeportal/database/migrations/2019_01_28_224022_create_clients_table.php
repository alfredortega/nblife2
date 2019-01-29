<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('middlename',50);
            $table->string('salutation',5);
            $table->string('gender',1);          
            $table->string('suffix',5);
            $table->string('streetaddress',100);
            $table->string('streetaddress2',100);
            $table->string('city',100);
            $table->string('state',2);
            $table->string('zipcode',10);
            $table->string('homephone',15);
            $table->string('workphone',15);
            $table->string('height,5');
            $table->integer('weight');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('agerange_id')->references('id')->on('agerange');
            $table->integer('coach_id')->references('id')->on('coach');
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
        Schema::dropIfExists('clients');
    }
}
