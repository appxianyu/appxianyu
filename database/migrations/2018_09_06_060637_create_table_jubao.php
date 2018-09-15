<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJubao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('jubaos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('举报理由');
            $table ->softDeletes();
            $table->integer('shangpin_id')->nullable()->comment('被举报的商品ID');
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
        Schema::dropIfExists('jubaos');
    }
}
