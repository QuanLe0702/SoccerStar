<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->increments('orderDetail_id');
            $table->integer('orderDetail_quantity')->unsigned();
            $table->integer('orderDetail_price');
            $table->integer('product_size')->unsigned()->nullable();
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')
                ->references('order_id')->on('orders')->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');;
          
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
};
