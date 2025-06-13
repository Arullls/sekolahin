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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique(); // Bisa email atau nisn
            $table->string('password');
            $table->enum('role', ['admin', 'guru', 'siswa', 'ortu']);
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->timestamps();

            // Jika ada tabel kelas, bisa bikin foreign key:
            // $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
