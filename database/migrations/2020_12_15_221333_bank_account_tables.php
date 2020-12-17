<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BankAccountTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_account', function (Blueprint $table) {
            $table->id('bank_account_id')->unsigned()->comment('PK');
            $table->char('name', 100)->comment('銀行口座名');
            $table->tinyInteger('bank_type')->unsigned()->comment('銀行種別');
            $table->timestamps();
            $table->softDeletesCol();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_account');
    }
}
