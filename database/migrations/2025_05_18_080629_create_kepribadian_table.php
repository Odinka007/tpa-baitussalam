<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up()
    {
       Schema::create('kepribadian', function (Blueprint $table) {
    $table->id();
    $table->foreignId('santri_id')->constrained('datasantris')->onDelete('cascade');
    $table->string('sikap')->nullable();
    $table->string('kerajinan')->nullable();
    $table->string('keterampilan')->nullable();
    $table->timestamps();

    // rujuk ke tabel datasantris, bukan santri
    // $table->foreign('santri_id')->references('id')->on('datasantris')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepribadian');
    }
};
