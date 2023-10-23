<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 説明：コメント投稿者の名前
            $table->text('body');

            /** リレーションの設定
             * foreignId()：外部キーを設定する
             * references('id')：外部キーとして設定するカラムを指定する
             * on('posts')：外部キーとして設定するテーブルを指定する
             * cascadeOnDelete()：親テーブルのレコードが削除された時に、子テーブルのレコードも一緒に削除する
             */

            $table->foreignId('post_id')->references('id')->on('posts')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
