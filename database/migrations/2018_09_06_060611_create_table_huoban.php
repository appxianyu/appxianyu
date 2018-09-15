<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHuoban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huobans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('公司名');
            $table->string('logo')->comment('公司logoo');
            $table->string('url')->comment('公司url');
            $table->text('intro')->comment('公司简介');
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
        Schema::dropIfExists('huobans');
    }
}
