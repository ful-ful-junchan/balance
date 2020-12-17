<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MonthlyBalanceDivisionResultsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_balance_division_results', function (Blueprint $table) {
            $table->id('monthly_balance_division_results_id')->unsigned()->comment('PK');
            $table->integer('balance_book_id')->unsigned()->comment('家計簿ID');
            $table->dateTime('register_at')->nullable(false)->comment('登録日');
            $table->json('amount_json')->comment('入力金額json');
            $table->longText('comment')->comment('説明');
            $table->timestamps();
            $table->softDeletes();

            // Index
            $table->index(['balance_book_id'], 'idx_book_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_balance_division_results');
    }
}
