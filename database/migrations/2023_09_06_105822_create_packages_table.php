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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30 );
            $table->string('image_link');
            $table->text('description');

            $table->string('room_type_mecca', 15); 
            $table->unsignedSmallInteger('distance_mecca')->max(9999);  
            $table->string('room_type_medina', 15); 
            $table->unsignedSmallInteger('distance_medina')->max(9999); 

            $table->unsignedTinyInteger('day')->default(0);
            $table->decimal('price', 10, 2); 

            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
