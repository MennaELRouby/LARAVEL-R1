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
        Schema::create('places', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->string('title',100);
            $table->string('type',100);
            $table->string('fprice',100);
            $table->string('toprice',100);
            $table->text('content',1000);
            $table->string('image', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
