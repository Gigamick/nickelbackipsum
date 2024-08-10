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
        Schema::create('lyrics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('line')->index();
            $table->integer('line_length')->nullable();  // Optional for future use
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lyrics');
    }
};
