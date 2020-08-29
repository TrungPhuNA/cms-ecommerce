<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('mn_name')->nullable();
            $table->string('mn_slug')->unique()->index();
            $table->tinyInteger('mn_sort')->default(1)->index();
            $table->string('mn_description')->nullable();
            $table->string('mn_article_hot')->nullable();
            $table->integer('mn_parent_id')->default(0)->index();
            $table->string('mn_title_seo')->nullable();
            $table->string('mn_description_seo')->nullable();
            $table->tinyInteger('mn_status')->index()->default(0);
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
        Schema::dropIfExists('menus');
    }
}
