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
    Schema::create('domains', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique();   // WAJIB ADA
    $table->text('description')->nullable();
    $table->unsignedBigInteger('price')->default(0);
    $table->enum('status', ['Available', 'Sold'])->default('Available');
    $table->timestamps();
});

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
