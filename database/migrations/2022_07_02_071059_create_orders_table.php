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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->timestamp('order_date')->useCurrent();
            $table->boolean('order_status')->nullable()->default(0);
            $table->string('order_note',255)->nullable();
            $table->integer('customer_telephone')->unsigned();
            $table->string('customer_name',100);
            $table->string('customer_address',500);
            $table->string('customer_mail',100);
            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')
            ->references('customer_id')->on('customers');
       
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
