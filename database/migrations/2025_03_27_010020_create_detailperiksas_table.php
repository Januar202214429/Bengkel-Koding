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
        Schema::create('detailperiksas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_periksa')->constrained('periksas')->onDelete('cascade');
            $table->foreignId('id_obat')->constrained('obats')->onDelete('cascade');

            $table->timestamps(); // jika ingin mencatat waktu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // PERBAIKI juga di sini: nama tabel harus sama dengan `create`
        Schema::dropIfExists('detailperiksas');
    }
};
