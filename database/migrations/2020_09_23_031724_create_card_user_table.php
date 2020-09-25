<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_user', function (Blueprint $table) {
            $table->id();
            $table->integer('cu_bank_id')->index()->default(0);
            $table->integer('cu_user_id')->index()->default(0);
            $table->string('cu_account_number')->nullable();
            $table->string('cu_branch')->nullable();
            $table->string('cu_account_holder')->nullable();
            $table->tinyInteger('cu_main')->default(0);
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
        Schema::dropIfExists('card_user');
    }
}
