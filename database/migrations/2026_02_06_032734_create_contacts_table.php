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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // お名前
            $table->string('company')->nullable(); // 貴社名（空でもOK）
            $table->string('email');            // メールアドレス
            $table->string('subject');          // お問い合わせ項目
            $table->text('message');            // お問い合わせ内容
            $table->ipAddress('ip')->nullable(); // 送信元IP
            $table->boolean('completed')->default(false); // 完了フラグ
            $table->timestamps();               // 作成日時・更新日時
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
