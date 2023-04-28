<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('support_category')->references('id')->on('support_categories')->onDelete('cascade');
            $table->string('title', 100);
            $table->string('subtitle', 60);
            $table->string('slug');
            $table->text('content');
            $table->string('image');
            $table->timestamps();
        });
    }

     
    public function down(): void
    {
        Schema::dropIfExists('supports');
    }
};
