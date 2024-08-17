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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('contact_title')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('address_title')->nullable();
            $table->string('address')->nullable();
            $table->string('follow_title')->nullable();
            $table->string('facebbok')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('copyright')->nullable();
            $table->string('terms_conditions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
