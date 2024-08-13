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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kid_id')->constrained('kids')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('m1')->default(false);
            $table->boolean('m2')->default(false);
            $table->boolean('m3')->default(false);
            $table->boolean('m4')->default(false);
            $table->boolean('f1')->default(false);
            $table->boolean('f2')->default(false);
            $table->boolean('f3')->default(false);
            $table->boolean('f4')->default(false);
            $table->boolean('a1')->default(false);
            $table->boolean('a2')->default(false);
            $table->boolean('a3')->default(false);
            $table->boolean('a4')->default(false);
            $table->boolean('a5')->default(false);
            $table->boolean('a6')->default(false);
            $table->boolean('a7')->default(false);
            $table->boolean('a8')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
