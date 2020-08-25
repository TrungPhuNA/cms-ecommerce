<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnAllInTableArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->integer('a_author_id')->index()->default(0);
            $table->tinyInteger('a_position_1')->default(0);
            $table->tinyInteger('a_position_2')->default(0);
            $table->tinyInteger('a_position_3')->default(0);
            $table->tinyInteger('a_position_4')->default(0);
            $table->tinyInteger('a_position_5')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
