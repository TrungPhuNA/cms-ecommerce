<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailMarketingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_marketing', function (Blueprint $table) {
            $table->id();
            $table->string('em_title')->nullable();
            $table->text('em_content')->nullable();
            $table->tinyInteger('em_status')->index()->default(3);
            $table->integer('em_author_id')->default(0);
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
        Schema::dropIfExists('email_marketing');
    }
}
