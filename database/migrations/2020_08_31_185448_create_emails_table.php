<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->char('em_driver',20)->nullable();
            $table->string('em_host')->nullable();
            $table->char('em_port',10)->nullable();
            $table->string('em_encryption')->nullable();
            $table->string('em_username')->nullable();
            $table->string('em_password')->nullable();
            $table->string('em_from_address')->nullable();
            $table->string('em_domain')->nullable();
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
        Schema::dropIfExists('emails');
    }
}
