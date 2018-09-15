<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePinglun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pingluns', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('评论内容');
            $table ->softDeletes();
            $table->integer('user_id')->nullable()->comment('用户ID');
            $table->integer('shangpin_id')->nullable()->comment('商品ID');
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
        Schema::dropIfExists('pingluns');
    }
}
