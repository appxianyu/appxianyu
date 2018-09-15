<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePmliebiaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmliebiao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shangpin_id')->nullable()->comment('商品ID');
            $table->integer('uuser_id')->comment('竞拍人ID');
            $table->string('endmoney')->comment('最终竞价');
            $table ->softDeletes();
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
        Schema::dropIfExists('pmliebiao');
    }
}
