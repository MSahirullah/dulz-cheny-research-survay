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
        Schema::create('audio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kid_id')->constrained('kids')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('bonnie')->default(false);
            $table->boolean('daphne')->default(false);
            $table->boolean('mickey')->default(false);
            $table->boolean('timmy')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audio');
    }
};
