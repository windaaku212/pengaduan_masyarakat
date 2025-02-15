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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained('users')->onDelete('cascade');
            $table->unsignedBigInteger('kategori_id')->constrained('kategori')->onDelete('cascade');
            $table->date('tanggal_pengaduan');
            $table->text('judul_pengaduan');
            $table->text('isi_pengaduan');
            $table->text('foto');
            $table->enum('status',['Baru','Proses','Selesai','Ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
