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
        Schema::create('datasantris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri');
            $table->enum('jenis_kelamin', ['Laki-Laki','Perempuan']);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nama_orang_tua');
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->text('alamat')->nullable();
            $table->text('bakat_prestasi')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasantris');
    }
};
