<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('adult');
            $table->string('children');
            $table->string('kids');
            $table->string('date');
            $table->string('time');
            $table->enum('status', ['pending', 'approved'])->default('pending');
            $table->string('payment_link');
            $table->string('payment_approved');
            $table->timestamps();
        });
    } 
    
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
