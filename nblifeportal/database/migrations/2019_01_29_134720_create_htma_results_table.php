<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtmaResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('htma_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('labnumber',10);
            $table->date('labdate');
            $table->decimal('calcium',10,3);
            $table->decimal('magnesium',10,3);
            $table->decimal('sodium',10,3);
            $table->decimal('potassium',10,3);
            $table->decimal('iron',10,3);
            $table->decimal('copper',10,3);
            $table->decimal('manganese',10,3);
            $table->decimal('zinc',10,3);
            $table->decimal('chromium',10,3);
            $table->decimal('selenium',10,3);
            $table->decimal('phosphorus',10,3);
            $table->decimal('lead',10,3);
            $table->decimal('mercury',10,3);
            $table->decimal('cadmium',10,3);
            $table->decimal('arsenic',10,3);
            $table->decimal('aluminum',10,3);
            $table->decimal('nickel',10,3);
            $table->decimal('cobalt',10,3);
            $table->decimal('molybdenum',10,3);
            $table->decimal('lithium',10,3);
            $table->decimal('boron',10,3);
            $table->integer('client_id')->references('id')->on('clients');;
            $table->string('file_name',250);
            
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
        Schema::dropIfExists('htma_results');
    }
}
