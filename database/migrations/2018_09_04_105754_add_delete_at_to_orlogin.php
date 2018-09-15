<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeleteAtToOrlogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shangpins', function (Blueprint $table) {
            $table->string('orlogin')->default(0)->comment('是否交易中');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shangpins', function (Blueprint $table) {
            $table->dropColumn('orlogin');
        });
    }
}
