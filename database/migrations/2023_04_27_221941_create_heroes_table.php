<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('subtitle', 50);
            $table->string('image');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
