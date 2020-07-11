<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAttributeValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attribute_value', function (Blueprint $table) {
            $table->id();
            $table->integer('pav_product_id')->default(0)->index();
            $table->integer('pav_attribute_id')->default(0)->index();
            $table->integer('pav_price_id')->default(0);
            $table->string('pav_avatar')->nullable();
            $table->integer('pav_value_id')->default(0)->index();
//            $table->unique(['pav_product_id','pav_attribute_id','pav_value_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attribute_value');
    }
}
