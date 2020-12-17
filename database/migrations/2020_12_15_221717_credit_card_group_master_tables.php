<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreditCardGroupMasterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_group_master', function (Blueprint $table) {
            $table->id('credit_card_group_master_id')->unsigned()->comment('PK');
            $table->char('group_name', 100)->comment('明細グループ名');
            $table->json('target_card_details_str')->comment('変換対象カード明細JSON');
            $table->integer('balance_division_section_id')->unsigned()->comment('収支大項目');
            $table->integer('balance_division_item_id')->unique()->comment('収支小項目');
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
        Schema::dropIfExists('credit_card_group_master');
    }
}
