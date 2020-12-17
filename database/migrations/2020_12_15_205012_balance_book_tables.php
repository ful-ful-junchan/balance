<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BalanceBookTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_book', function (Blueprint $table) {
            $table->id('balance_book_id')->unsigned()->comment('PK');
            $table->integer('year')->unsigned()->comment('対象年');
            $table->boolean('is_active')->unsigned()->default(1)->comment('有効／無効');
            $table->longText('comment')->comment('コメント');
            $table->timestamps();
            $table->softDeletes();

            // Index
            $table->index(['year', 'is_active'], 'idx_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_book');
    }
}
