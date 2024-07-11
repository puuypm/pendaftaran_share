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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_jurusan')->nullable();
            $table->bigInteger('id_gelombang')->nullable();
            $table->string('nama_lengkap', length:45)->nullable();
            $table->string('nik', length:18)->nullable();
            $table->string('kartu_keluarga', length:100);
            $table->string('jenis_kelamin', length:15)->nullable();
            $table->string('tempat_lahir', length:30)->nullable();
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir', length:50)->nullable();
            $table->string('nama_sekolah', length:45)->nullable();
            $table->string('kejuruan', length:45)->nullable();
            $table->string('nomor_hp', length:15)->nullable();
            $table->string('email', length:40)->nullable()->unique();
            $table->string('aktivitas_saat_ini', length: 150)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
