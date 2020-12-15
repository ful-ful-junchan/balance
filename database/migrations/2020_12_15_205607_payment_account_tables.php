<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentAccountTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_account', function (Blueprint $table) {
            $table->id('payment_account_id')->unsigned()->comment('PK');
            $table->integer('balance_book_id')->unsigned()->comment('家計簿ID');
            $table->char('payment_account_name', 100)->comment('口座名（カード名）');
            $table->tinyInteger('account_type')->unsigned()->comment('口座種別');
            $table->integer('bank_account_id')->unsigned()->comment('銀行口座ID');
            $table->integer('credit_card_account_id')->unsigned()->comment('クレジットカードID');
            $table->integer('initial_amount')->comment('初期金額');
            $table->dateTime('effective_start_date')->comment('使用開始日');
            $table->timestamps();
            $table->softDeletesCol();

            // Index
            $table->index(['balance_book_id', $table->getSoftDeleteColumn()], 'idx_book_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_account');
    }
}
