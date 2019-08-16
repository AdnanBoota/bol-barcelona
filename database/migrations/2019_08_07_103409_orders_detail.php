<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('orders_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('quantity')->default('1');
            $table->string('extras')->default('No extra ingredients');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->timestamps();

        });
        //     $table->foreign('ingredients_id')->references('id')->on('ingredients');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('orders_detail');
        Schema::enableForeignKeyConstraints();
    }
}
