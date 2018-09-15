<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleAtToShangpins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shangpins', function (Blueprint $table) {
            //
            $table->string('title')->comment('标题');
            $table->string('province')->comment('三级联动省');
            $table->string('city')->comment('三级联动市');
            $table->string('area')->comment('三级联动区');
            $table->dropColumn('quyu');
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
            $table->dropColumn('title');
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('area');
           $table->string('quyu');
        });
    }
}
