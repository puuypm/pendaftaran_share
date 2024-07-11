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
        Schema::create('c_p_participants', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('id_jurusan')->nullable();
            $table->bigInteger('id_gelombang')->nullable();
            $table->string('nama_lengkap', length:45)->nullable();
            $table->string('kartu_keluarga', length:100);
            $table->string('email', length:40)->nullable()->unique();
            $table->tinyInteger('status')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_p_participants');
    }
};
