<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            // nama service
            $table->string('name')->unique();

            // slug untuk URL
            $table->string('slug')->unique();

            // deskripsi
            $table->text('description')->nullable();

            // harga
            $table->unsignedBigInteger('price')->default(0);

            // status
            $table->enum('status', ['Active', 'Inactive'])->default('Active');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
