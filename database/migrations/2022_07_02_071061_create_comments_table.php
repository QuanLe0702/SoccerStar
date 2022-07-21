<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->integer('comment_point')->unsigned();
            $table->string('comment_content', 500);
            $table->timestamp('comment_date')->useCurrent();
         
            $table->string('comment_reply', 500)->nullable();
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('comments')->insert(
            [
                'comment_point' => '4',
                'comment_content' => 'Sản phẩm rất đẹp',
            
                'product_id' => '1',
                'customer_id' => '1'
            ]
        );
        DB::table('comments')->insert(
            [
                'comment_point' => '5',
                'comment_content' => 'Sản phẩm rất đẹp, giao hàng nhanh',
       
                'product_id' => '1',
                'customer_id' => '2'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
