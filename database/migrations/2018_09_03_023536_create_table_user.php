<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->comment('用户名字');
            $table->string('password')->comment('用户密码');
            $table->string('email')->unique()->comment('邮箱');
            $table->string('pic')->comment('头像');
            $table->string('name')->comment('真实姓名');
            $table->string('sfenz')->comment('身份证号');
            $table->string('phone')->comment('手机号');
            $table ->softDeletes();
            $table->integer('shangpin_id')->nullable()->comment('发布的商品ID');
            $table->integer('paimai_id')->nullable()->comment('拍卖的商品ID');
            $table->integer('content_id')->nullable()->comment('消息ID');
            $table->integer('guanggao_id')->nullable()->comment('广告位ID');
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
        
            Schema::dropIfExists('users');
        
    }
}
