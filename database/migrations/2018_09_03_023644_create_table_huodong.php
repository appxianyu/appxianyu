<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHuodong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huodongs', function (Blueprint $table) {
            $table->increments('id');         
            $table->string('title')->comment('活动标题');
            $table->text('content')->comment('活动内容');
            $table->string('time')->comment('活动时间');
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
        Schema::dropIfExists('huodongs');
    }
}
