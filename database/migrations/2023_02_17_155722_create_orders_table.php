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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->foreignId('busy_id')->constrained()->onDelete('cascade');
            $table->string('phone');
            $table->integer('count');
            $table->string('price')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_returned')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
