<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('judul');
            $table->text('deskripsi');
            $table->string('link_github')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('kategori'); 
            $table->enum('nilai', ['A', 'B', 'C', 'D']);
            $table->string('jenis_porto'); 
            $table->string('tools'); 
            $table->string('teknologi'); 

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};