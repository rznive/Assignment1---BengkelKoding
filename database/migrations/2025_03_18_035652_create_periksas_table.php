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
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pasien')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_dokter')->constrained()->onDelete('cascade');
            $table->dateTime('tgl_periksa')->nullable();
            $table->longText('catatan')->nullable();
            $table->bigInteger('biaya_periksa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksas');
    }
};
