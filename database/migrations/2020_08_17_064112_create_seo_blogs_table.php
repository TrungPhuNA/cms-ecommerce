<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_blogs', function (Blueprint $table) {
            $table->tinyInteger('sb_type')->default(1)->index();
            $table->integer('sb_action_id')->default(0)->index();
            $table->string('sb_md5')->nullable()->index();
            $table->unique(['sb_type','sb_action_id','sb_md5']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_blogs');
    }
}
