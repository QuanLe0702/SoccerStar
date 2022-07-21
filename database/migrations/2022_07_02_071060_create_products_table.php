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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name', 170);
            $table->integer('product_price');
            $table->boolean('product_highlight')->default(0);
            $table->timestamp('product_date')->useCurrent();
            $table->text('product_description', 1000)->nullable();
            $table->string('product_image', 255);
            $table->integer('product_type_id')->unsigned();
            $table->foreign('product_type_id')
                ->references('id')->on('product_types')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')
                ->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
          
        });

        DB::table('products')->insert(
            [

                'product_name' => 'MIZUNO - GOLD/WHITE',
                'product_price' => '550000',
                'product_image' => 'sp1.jpg',
                'product_highlight' => '1',
                'product_description' =>'Thương hiệu Nhật Bản đình đám Mizuno cho ra mắt một dòng giày đá bóng siêu nhẹ không hề kém cạnh Mercurial của Nike, X Ghosted của adidas hay Ultra của Puma. Sự ra mắt của Mizuno Morelia Ultra Light MIJ chính xác là một sự chứng minh Mizuno không hề kém cạnh cuộc trong cuộc đua tốc độ này.',
                'product_type_id' => '2',
                'brand_id' => '1'
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
        Schema::dropIfExists('products');
    }
};
