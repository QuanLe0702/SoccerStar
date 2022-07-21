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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('customer_name', 100);
            $table->integer('customer_telephone')->unsigned();
            $table->string('customer_email', 100)->unique();
            $table->string('customer_address', 255)->nullable();
            $table->string('customer_image', 255)->nullable()->default('avatar_user.png');
            $table->string('customer_password', 60);
            $table->tinyInteger('customer_status')->default(1);
        });

        DB::table('customers')->insert(
            [
                'customer_name' => 'Lê Thị Ngọc Huyền',
                'customer_telephone' => '0355485703',
                'customer_email' => 'huyenle021039@gmail.com',
                'customer_address' => '132 bến vân đồn , phường 6, quận 4, Hồ chí Minh',
                'customer_password' => md5('123456')

            ],

        );

        DB::table('customers')->insert(
            [
                'customer_name' => 'Lê Đàm Quân',
                'customer_telephone' => '0777295703',
                'customer_email' => 'quan@gmail.com',
                'customer_address' => '147 nguyễn cửu vân, phường 17, quận Bình Thạnh, Hồ chí Minh',
                'customer_password' =>md5('123456')

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
        Schema::dropIfExists('customers');
    }
};
