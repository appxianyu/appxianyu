<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaimai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paimais', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image')->comment('商品图片');
            $table->string('intro')->comment('商品简介');
            $table->string('cheng')->comment('成色');
            $table->string('money')->comment('起拍价格');
            $table->string('jmoney')->comment('加价幅度');
            $table->string('opentime')->comment('开拍时间');
            $table->string('overtime')->comment('结束时间');
            $table ->softDeletes();
            $table->integer('user_id')->nullable()->comment('用户ID');
            $table->integer('xxcate_id')->nullable()->comment('分类ID');
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
        Schema::dropIfExists('paimais');
    }
}
