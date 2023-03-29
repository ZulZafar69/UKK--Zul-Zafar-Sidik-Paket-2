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
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->id();
            $table->string('nik', '16')->nullable();
            $table->string('nama', '35')->nullable();
            $table->string('username', '25')->nullable();
            $table->string('password')->nullable();
            $table->string('telp', '13')->nullable();
            // $table->enum('level',['pria', 'wanita'])->nullable();
            // $table->string('gender')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};
