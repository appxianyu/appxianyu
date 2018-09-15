<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dings', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('title')->comment('商品标题');
            $table->text('image')->comment('商品图片');
            $table->string('cheng')->comment('成色');
            $table->string('money')->comment('商品价格');
            $table->string('zhifu')->comment('支付方式');
            $table->string('kuaidi')->comment('快递方式');
            $table ->softDeletes();
            $table->integer('user_id')->nullable()->comment('用户ID');
            $table->integer('shangpin_id')->nullable()->comment('商品ID');
            $table->integer('shouhuo_id')->nullable()->comment('收货ID');
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
        Schema::dropIfExists('dings');
    }
}
