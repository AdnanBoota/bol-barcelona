<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBowlsIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bowls_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->default('toppings');
            $table->integer('bowls_id')->unsigned();
            $table->integer('ingredients_id')->unsigned();
            $table->foreign('bowls_id')->references('id')->on('bowls')->onDelete('cascade');
            $table->foreign('ingredients_id')->references('id')->on('ingredients')->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('bowls_ingredients');
        Schema::enableForeignKeyConstraints();
    }
}
