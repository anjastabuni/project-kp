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
        Schema::create('proposals', function (Blueprint $table) {
            $table->string('id_proposal', 8)->primary();
            $table->string('id_mahasiswa', 8);
            $table->string('id_status', 6);
            $table->string('judul', 255);
            $table->string('pembimbing', 50);
            $table->date('tgl_pengajuan');
            $table->timestamps();

            $table->foreign('id_mahasiswa')->references('npm')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('id_status')->references('id_status')->on('statuses')->onDelete('saccade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
