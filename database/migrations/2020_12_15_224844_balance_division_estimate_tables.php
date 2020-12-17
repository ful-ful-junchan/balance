<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BalanceDivisionEstimateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_division_estimate', function (Blueprint $table) {
            $table->id('balance_division_estimate_id')->unsigned()->comment('PK');
            $table->integer('balance_book_id')->unsigned()->comment('家計簿ID');
            $table->integer('balance_division_master_id')->unsigned()->comment('収支項目ID');
            $table->integer('amount')->comment('金額');
            $table->dateTime('effective_start_date')->comment('適用開始日');
            $table->dateTime('effective_end_date')->comment('適用終了日');
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
        Schema::dropIfExists('balance_division_estimate');
    }
}
