<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BalanceDivisionSectionMasterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_division_section_master', function (Blueprint $table) {
            $table->id('balance_division_section_master_id')->unsigned()->comment('PK');
            $table->text('name')->comment('収支大項目名');
            $table->longtext('comment')->comment('説明');
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
        Schema::dropIfExists('balance_division_section_master');
    }
}
