<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesStaticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_static', function (Blueprint $table) {
            $table->id();
            $table->string('ps_link')->nullable();
            $table->string('ps_md5')->index()->unique();
            $table->string('ps_title')->nullable();
            $table->string('ps_description')->nullable();
            $table->string('ps_title_seo')->nullable();
            $table->string('ps_description_seo')->nullable();
            $table->text('ps_content');
            $table->tinyInteger('ps_seo')->default(0);
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
        Schema::dropIfExists('pages_static');
    }
}
