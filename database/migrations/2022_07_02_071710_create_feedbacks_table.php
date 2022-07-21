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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('feedback_id');
            $table->string('feedback_name', 100);
            $table->string('feedback_email', 100);
            $table->string('feedback_content', 1000);
            $table->timestamp('feedback_date')->useCurrent();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')
                ->references('customer_id')->on('customers')->onDelete('cascade')->onUpdate('cascade');;
        });

        DB::table('feedbacks')->insert(
            [
                'feedback_name' => 'Quốc Tuấn',
                'feedback_email' => 'tuan@gmail.com',
                'feedback_content' => 'Shop rất nhiệt tình, giao hàng nhanh'
            ]
        );

        DB::table('feedbacks')->insert(
            [
                'feedback_name' => 'Thành Long',
                'feedback_email' => 'long@gmail.com',
                'feedback_content' => 'Sản phẩm rất đẹp'
            ]
        );
        
        DB::table('feedbacks')->insert(
            [
                'feedback_name' => 'Lê Đàm Quân',
                'feedback_email' => 'quan@gmail.com',
                'feedback_content' => 'Sản phẩm rất đẹp, nhiều tin tức hay'
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
        Schema::dropIfExists('feedbacks');
    }
};
