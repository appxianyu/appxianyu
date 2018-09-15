<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHuodongTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huodongs', function (Blueprint $table) {
            
            $table->string('opentime')->comment('活动开始时间');
            $table->string('overtime')->comment('活动结束时间');
            $table->dropColumn('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huodongs', function (Blueprint $table) {
            $table->dropColumn('opentime');
            $table->dropColumn('overtime');
            $table->string('time')->comment('活动时间');
        });
    }
}
