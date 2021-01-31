<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('name_kana')->after('name'); //氏名 カナ
            $table->boolean('gender')->after('name_kana'); // 性別
            $table->tinyInteger('age')->after('gender');//年齢
            $table->integer('birthday')->after('age');//誕生日
            $table->integer('postal_code')->after('birthday');//郵便番号
            $table->string('address')->after('postal_code');//住所
            $table->unsignedBigInteger('phone')->after('address');//電話番号
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
