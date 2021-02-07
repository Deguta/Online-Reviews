<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('title',60);//タイトル 60文字に制限
            $table->string('text',255); //クチコミ 255文字に制限
            $table->unsignedBigInteger('user_id'); //user_idの外部キー
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');//user_idの外部キーの制約と投稿者が削除されたらその投稿も削除できるように紐付け
            $table->unsignedBigInteger('hospital_id'); //user_idの外部キー 現在なしで登録可能にしている
            $table->foreign('hospital_id')->references('id')->on('users')->onDelete('cascade');//user_idの外部キーの制約と投稿者が削除されたらその投稿も削除できるように紐付け
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_reviews');
    }
}
