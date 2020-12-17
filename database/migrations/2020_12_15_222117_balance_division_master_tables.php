<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BalanceDivisionMasterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_division_master', function (Blueprint $table) {
            $table->id('balance_division_master_id')->unsigned()->comment('PK');
            $table->tinyInteger('balance_type')->unsigned()->comment('収支種別');
            $table->text('title')->comment('収支項目名');
            $table->integer('balance_division_section_id')->unsigned()->comment('収支大項目');
            $table->integer('balance_division_item_id')->unique()->comment('収支小項目');
            $table->integer('payment_account_id')->unsigned();
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
        Schema::dropIfExists('balance_division_master');
    }
}
