<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_carts', function (Blueprint $table) {
            $table->increments('id');
            $table->double('subQuantity', 10, 2);
            $table->double('total', 10, 2);
            $table->string('checkout');
            $table->integer('delivery_id')->unsigned();
            $table->timestamps();

            $table->foreign('delivery_id')->references('id')->on('deliveries')->onDelete('CASCADE');
            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_carts');
    }
}
