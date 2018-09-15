<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShoucang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_shangpin', function (Blueprint $table) {           
            $table->integer('user_id')->nullable()->comment('收藏此商品的用户ID');
            $table->integer('shangpin_id')->nullable()->comment('此商品ID');
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
         Schema::dropIfExists('user_shangpin');
    }
}
