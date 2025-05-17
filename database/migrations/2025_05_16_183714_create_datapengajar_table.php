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
        Schema::create('datapengajar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengajar');
            $table->enum('jenis_kelamin', ['Laki-Laki','Perempuan']);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan_umum');
            $table->string('pendidikan_diniyah');
            $table->string('penataran')->nullable();
            $table->text('alamat')->nullable();
            $table->string('pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapengajar');
    }
};
