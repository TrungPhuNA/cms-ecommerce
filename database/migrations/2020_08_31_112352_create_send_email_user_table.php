<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendEmailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_emails_users', function (Blueprint $table) {
            $table->id();
            $table->string('seu_title')->nullable();
            $table->string('seu_description')->nullable();
            $table->tinyInteger('seu_status')->default(1)->index();
            $table->integer('seu_author_id')->default(0);
            $table->tinyInteger('seu_is_click')->default(0);
            $table->integer('seu_total_user')->index()->default(0);
            $table->integer('seu_template_email_id')->index()->default(0);
            $table->dateTime('seu_time_start')->nullable();
            $table->text('seu_content')->nullable();
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
        Schema::dropIfExists('send_emails_users');
    }
}
