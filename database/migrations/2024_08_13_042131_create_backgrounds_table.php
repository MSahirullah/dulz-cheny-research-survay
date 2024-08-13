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
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kid_id')->constrained('kids')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('0')->default(false);
            $table->boolean('1')->default(false);
            $table->boolean('2')->default(false);
            $table->boolean('3')->default(false);
            $table->boolean('4')->default(false);
            $table->boolean('5')->default(false);
            $table->boolean('6')->default(false);
            $table->boolean('7')->default(false);
            $table->boolean('8')->default(false);
            $table->boolean('9')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backgrounds');
    }
};
