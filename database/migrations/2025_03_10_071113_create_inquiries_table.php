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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name'); 
            $table->string('email'); 
            $table->string('phone')->nullable(); 
            $table->string('subject')->nullable(); 
            $table->text('message')->nullable(); 
            $table->text('reply')->nullable(); 
            $table->string('status')->default('not replied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
