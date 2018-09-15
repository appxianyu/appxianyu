<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHuo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huos', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('province')->comment('用户省');
            $table->string('city')->comment('用户市');
            $table->string('area')->comment('用户县');
            $table->string('phone')->comment('用户联系方式');
            $table->text('intro')->comment('用户详细地址');
            $table ->softDeletes();
            $table->integer('user_id')->nullable()->comment('用户ID');
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
        Schema::dropIfExists('huos');
    }
}
