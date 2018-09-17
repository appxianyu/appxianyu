<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToGuanggaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guanggaos', function (Blueprint $table) {
            //
            $table->string('title')->nullable()->comment('留言的邮箱');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guanggaos', function (Blueprint $table) {
            //
            $table->dropColumn('title');
        });
    }
}
