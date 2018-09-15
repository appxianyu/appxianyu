<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGuanggao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guanggaos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image')->comment('商品图片');
            $table->string('intro')->comment('商品简介');
            $table->string('cheng')->comment('成色');
            $table->string('money')->comment('价格');
            $table->string('orby')->comment('排序');
            $table->string('quyu')->comment('所在地');
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
         Schema::dropIfExists('guanggaos');
    }
}
