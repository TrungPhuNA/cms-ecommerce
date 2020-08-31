<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails_users', function (Blueprint $table) {
            $table->id();
            $table->integer('eu_user_id')->default(0)->index();
            $table->integer('eu_send_email_id')->default(0)->index();
            $table->tinyInteger('eu_status')->default(1);
            $table->unique(['eu_user_id','eu_send_email_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails_users');
    }
}
