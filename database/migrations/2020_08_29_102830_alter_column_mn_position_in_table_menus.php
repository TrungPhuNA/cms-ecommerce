<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnMnPositionInTableMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->tinyInteger('mn_position_1')->default(0);
            $table->tinyInteger('mn_position_2')->default(0);
            $table->tinyInteger('mn_position_3')->default(0);
            $table->tinyInteger('mn_position_4')->default(0);
            $table->tinyInteger('mn_position_5')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->tinyInteger('mn_position_1')->default(0);
            $table->tinyInteger('mn_position_2')->default(0);
            $table->tinyInteger('mn_position_3')->default(0);
            $table->tinyInteger('mn_position_4')->default(0);
            $table->tinyInteger('mn_position_5')->default(0);
        });
    }
}
