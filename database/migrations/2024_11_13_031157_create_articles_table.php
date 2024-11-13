<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('source')->nullable();
            $table->string('author')->nullable();
            $table->string('category')->nullable();
            $table->text('content')->nullable();
            $table->longText('description');
            $table->text('url')->nullable();
            $table->text('image_url')->nullable();
            $table->timestamps();

            $table->index('title');
            $table->index('slug');
            $table->index('source');
            $table->index('author');
            $table->index('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
