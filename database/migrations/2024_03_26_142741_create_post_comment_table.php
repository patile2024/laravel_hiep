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
        Schema::create('post_comment', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary()->unique();
            $table->unsignedBigInteger('postId');
            $table->unsignedBigInteger('parentId');
            $table->string('title', 100);
            $table->tinyInteger('published');
            $table->dateTime('createdAt');
            $table->dateTime('publishedAt');
            $table->text('content');
        });

        Schema::table('post_comment', function (Blueprint $table) {
            $table->foreign('postId')->references('id')->on('post');
            $table->foreign('parentId')->references('id')->on('post_comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comment');
    }
};