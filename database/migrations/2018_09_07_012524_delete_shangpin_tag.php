<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteShangpinTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sp_tag', function (Blueprint $table) {
            //
            Schema::dropIfExists('sp_tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sp_tag', function (Blueprint $table) {
            //
            $table->integer('tag_id');
            $table->integer('sp_id');
        });
    }
}
