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
        Schema::dropIfExists('artikels');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
Schema::create('artikels', function ($table){
    $table ->id();
    $table->timestamps();
});    }
};
