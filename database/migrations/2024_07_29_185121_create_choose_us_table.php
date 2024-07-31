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
        Schema::create('choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('short_descreption')->nullable();
            $table->string('image_one')->nullable();
            $table->string('short_descreption_one')->nullable();
            $table->text('descreption_one')->nullable();
            $table->string('short_descreption_two')->nullable();
            $table->text('descreption_two')->nullable();
            $table->string('short_descreption_three')->nullable();
            $table->text('descreption_three')->nullable();
            $table->string('short_descreption_four')->nullable();
            $table->text('descreption_four')->nullable();
            $table->string('short_descreption_five')->nullable();
            $table->text('descreption_five')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_us');
    }
};
