<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoEcommercesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_ecommerces', function (Blueprint $table) {
            $table->tinyInteger('se_type')->default(1)->index();
            $table->integer('se_action_id')->default(0)->index();
            $table->string('se_md5')->nullable()->index();
            $table->unique(['se_type','se_action_id','se_md5']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_ecommerces');
    }
}
