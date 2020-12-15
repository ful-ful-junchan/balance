<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BalanceDivisionItemMasterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_division_item_master', function (Blueprint $table) {
            $table->id('balance_division_item_master_id')->unsigned()->comment('PK');
            $table->text('name')->comment('収支小項目名');
            $table->integer('balance_division_section_id')->unsigned()->comment('収支大項目ID');
            $table->longtext('comment')->comment('説明');
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
        Schema::dropIfExists('balance_division_item_master');
    }
}
