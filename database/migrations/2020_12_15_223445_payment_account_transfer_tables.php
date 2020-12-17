<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentAccountTransferTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_account_transfer', function (Blueprint $table) {
            $table->id('payment_account_transfer_id')->unsigned()->comment('PK');
            $table->text('name')->comment('振替名');
            $table->integer('origin_payment_account_id')->unsigned()->comment('入手金元口座ID');
            $table->integer('target_payment_account_id')->unsigned()->comment('入手金先口座ID');
            $table->dateTime('effective_start_date')->comment('適用開始日');
            $table->dateTime('effective_end_date')->comment('適用終了日');
            $table->longText('comment')->comment('説明');
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
        Schema::dropIfExists('payment_account_transfer');
    }
}
