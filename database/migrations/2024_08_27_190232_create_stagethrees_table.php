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
        Schema::create('stagethrees', function (Blueprint $table) {
            $table->id();
            $table->string('stagethree')->nullable();
            $table->string('article_1')->nullable();
            $table->string('article_2')->nullable();
            $table->string('article_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagethrees');
    }
};
