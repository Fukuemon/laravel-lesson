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
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20); //名前
            $table->string('email', 255); // メールアドレス
            $table->longText('url')->nullable(); // メッセージ
            $table->boolean('gender'); //性別
            $table->tinyInteger('age'); //年齢
            $table->string('contact', 200); //お問い合わせ種類
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};