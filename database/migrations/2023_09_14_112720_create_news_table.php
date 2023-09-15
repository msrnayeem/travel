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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('banner_text', 10)->nullable();
            $table->string('image_link')->nullable();
            $table->string('slug')->nullable();
            $table->mediumText('description');

            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_trending')->default(false);
            
            $table->foreignId("user_id")->constrained()->onDelete('CASCADE');
            $table->foreignId("news_category_id")->constrained()->onDelete('CASCADE');
            $table->foreignId("category_id")->constrained()->onDelete('CASCADE');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
