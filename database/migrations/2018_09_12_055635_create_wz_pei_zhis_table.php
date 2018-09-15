<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWzPeiZhisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wzpeizhis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('网站标题');
            $table->string('logo')->comment('网站logo');
            $table->string('pic1')->comment('首页轮播图1');
            $table->string('pic2')->comment('首页轮播图2');
            $table->string('pic3')->comment('首页轮播图3');  
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
        Schema::dropIfExists('wzpeizhis');
    }
}
