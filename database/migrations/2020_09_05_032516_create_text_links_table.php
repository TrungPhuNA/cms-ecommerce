<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_links', function (Blueprint $table) {
            $table->id();
            $table->string('tl_name')->nullable();
            $table->string('tl_title')->nullable();
            $table->string('tl_link')->nullable();
            $table->tinyInteger('tl_sort')->default(0);
            $table->tinyInteger('tl_target')->default(0);
            $table->tinyInteger('tl_position')->default(0)->index();
            $table->tinyInteger('tl_status')->default(1)->index();
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
        Schema::dropIfExists('text_links');
    }
}
