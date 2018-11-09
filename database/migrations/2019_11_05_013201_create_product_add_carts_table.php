<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAddCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_add_carts', function (Blueprint $table) {
            $table->increments('product_id, addCart_id');
            $table->integer('product_id')->unsigned();
            $table->integer('addCart_id')->unsigned();
            $table->timestamps();


            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
            $table->foreign('addCart_id')->references('id')->on('add_carts')->onDelete('CASCADE');
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
        Schema::dropIfExists('product_add_carts');
    }
}
