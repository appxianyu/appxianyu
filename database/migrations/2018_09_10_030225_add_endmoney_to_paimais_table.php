<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEndmoneyToPaimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paimais', function (Blueprint $table) {
            $table ->string('endmoney')->comment('成交价');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paimais', function (Blueprint $table) {
            $table ->dropColumn('endmoney');
        });
    }
}
