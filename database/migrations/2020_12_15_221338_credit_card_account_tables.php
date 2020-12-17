<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreditCardAccountTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_account', function (Blueprint $table) {
            $table->id('credit_card_account_id')->unsigned()->comment('PK');
            $table->char('name', 100)->comment('クレジットカード名');
            $table->tinyInteger('card_type')->unsigned()->comment('クレジットカード種別');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_card_account');
    }
}
