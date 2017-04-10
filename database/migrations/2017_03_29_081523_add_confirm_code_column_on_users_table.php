<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConfirmCodeColumnOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function (Blueprint $table)
        {
          $table->string('confirm_code',60)->nullable();
          $table->boolean('activated')->default(0);
          // boolean() 메서드는 MySql에서는 TINYINT열 타입으로 해석된다. default(0)메서드로
          // 이열의 기본값을 0 으로 정희했다. 사용자가 가입을 확인하면 1로 바꿀 것이다.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
