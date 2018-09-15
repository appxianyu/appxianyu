<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWomen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('womens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dizhi')->comment('我们地址');
            $table->string('phone')->comment('联系方式');
            $table->string('email')->comment('邮箱');
            $table->text('songtui')->comment('送货与退货');
            $table->text('question')->comment('帮助和常见问题');
            $table->string('banquan')->comment('版权所有');
            $table->string('zheng')->comment('网络文化经营许可证');
            $table->string('juphone')->comment('举报电话');
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
        Schema::dropIfExists('womens');
    }
}
