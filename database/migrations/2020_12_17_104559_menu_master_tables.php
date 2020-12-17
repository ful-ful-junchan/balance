<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenuMasterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_master', function (Blueprint $table) {
            $table->id('menu_master_id')->unsigned()->comment('PK');
            $table->tinyInteger('menu_type')->comment('メニュー種別');
            $table->integer('parent_menu_master_id')->default(0)->comment('親メニューID');
            $table->text('menu_title')->nullable(false)->comment('メニュータイトル');
            $table->text('url')->comment('URLパス');
            $table->text('icon')->comment('アイコン');
            $table->integer('sort')->comment('並び順（昇順）');
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
        Schema::dropIfExists('menu_master');
    }
}
