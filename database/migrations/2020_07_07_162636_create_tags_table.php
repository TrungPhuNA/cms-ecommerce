<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('t_name')->nullable();
            $table->string('t_slug')->unique()->index();
            $table->string('t_description')->nullable();
            $table->string('t_title_seo')->nullable();
            $table->integer('t_parent_id')->default(0)->index();
            $table->integer('t_count_article')->default(0);
            $table->string('t_description_seo')->nullable();
            $table->tinyInteger('t_status')->index()->default(0);
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
        Schema::dropIfExists('tags');
    }
}
