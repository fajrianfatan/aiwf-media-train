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
        Schema::create('streamings',function (Blueprint $table){
            $table->id();
            $table->string('judul');
            $table->foreignId('penulis_id')->constrained('penulis')->onDelete('cascade');
            $table->string('penerbit');
            $table->timestamp   ('link');
            $table->string('tahun_terbit');
            $table->text('body');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
Schema::dropIfExists('streamings');

   }
};
