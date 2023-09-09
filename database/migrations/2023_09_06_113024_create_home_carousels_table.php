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
        Schema::create('home_carousels', function (Blueprint $table) {
            $table->id(); 
            $table->string('title');
            $table->string('title_color',10);
            $table->string('caption');
            $table->string('caption_color',10);
            $table->string('image_link');
            $table->string('button_background_color',10);
            $table->tinyInteger('status')->default(1); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_carousels');
    }
};
