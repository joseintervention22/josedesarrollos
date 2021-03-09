<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('destinatario');
            $table->string('mensaje');
            $table->timestamps();
            /*
            Use this token to access the HTTP API:
            1624832206:AAFiumSFai8UEDmTxJ1DslH928mScF-U5-E
            Keep your token secure and store it safely, it can be used by anyone to control your bot.
            MI ID DE TELEGRAM ES: 757012105
            1133062395
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
