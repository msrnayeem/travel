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
            $table->string('banner_text', 10);
            $table->string('image_link');
            $table->string('slug');
            $table->mediumText('description');

            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_trending')->default(false);
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            $table->timestamps();
    
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('CASCADE')
            ->onUpdate('NO ACTION');

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
