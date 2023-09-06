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
            $table->id(); // Auto-incremental primary key
            $table->string('caption'); // Caption for the carousel item
            $table->string('image', 255); // Filepath for the image (adjust length as needed)
            $table->string('link'); // Link associated with the carousel item
            $table->timestamps(); // Created at and updated at timestamps
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
