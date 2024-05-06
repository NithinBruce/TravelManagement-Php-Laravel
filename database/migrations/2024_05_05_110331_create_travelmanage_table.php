<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('travelmanage', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('packagename');
            $table->string('destination');
            $table->string('description');
            $table->float('price', 8, 2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travelmanage');
    }
};
