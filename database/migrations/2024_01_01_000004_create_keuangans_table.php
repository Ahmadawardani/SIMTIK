<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->text('uraian_kegiatan');
            $table->string('jenis_belanja', 100);
            $table->string('kode_mak', 50);
            $table->decimal('nilai', 15, 2);
            $table->string('status', 20)->default('pending'); // pending, proses, selesai
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
