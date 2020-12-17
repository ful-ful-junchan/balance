<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account', function (Blueprint $table) {
            $table->id('user_account_id')->unsigned()->comment('PK');
            $table->char('name', 100)->comment('使用者名');
            $table->char('email', 255)->unique()->comment('メールアドレス（ログインID）');
            $table->char('password', 255)->comment('パスワード');
            $table->integer('role')->unsigned()->default(0)->comment('権限');
            $table->timestamps();
            $table->softDeletesCol();

            // Index
            $table->index(['email', $table->getSoftDeleteColumn()], 'idx_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_account');
    }
}
