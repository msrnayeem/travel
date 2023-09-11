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
        Schema::create('umrahs', function (Blueprint $table) {
            $table->id();

            $table->string('package_name');
            $table->integer('people_in_room');
            $table->integer('distance_mecca');
            $table->integer('distance_medina');
            $table->date('depart_date');
            $table->date('return_date');
            $table->decimal('price', 10, 2); // Example: 10 digits total, 2 decimal places
            $table->integer('total_person');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrahs');
    }
};
