<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            //     $table->integer('bowls_id')->nullable()->unsigned();
            //     $table->foreign('bowls_id')->references('id')->on('bowls');
            //     $table->integer('ingredients_id')->nullable()->unsigned();
            //     $table->foreign('ingredients_id')->references('id')->on('ingredients');
            //    $table->foreign('bowls_id')->references('id')->on('bowls');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->integer('pickup_time');
            // $table->string('bowl-type');
            $table->decimal('total', 8, 2);
            //    $table->text('specs');
            $table->text('description');
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
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('orders');
        // Schema::enableForeignKeyConstraints();
    }
}
