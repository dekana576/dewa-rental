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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan');
            $table->string('foto_kendaraan');
            $table->string('merek_kendaraan');
            $table->string('jenis_kendaraan');
            $table->string('kapasitas_mesin');
            $table->string('tahun_produksi');
            $table->string('no_polisi');
            $table->string('no_mesin');
            $table->integer('harga_sewa');
            $table->longText('deskripsi_kendaraan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
