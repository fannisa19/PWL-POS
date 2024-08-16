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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_penjualan');
            $table->unsignedBigInteger('id_barang'); // Foreign key to m_barang
            $table->integer('jumlah');
            $table->timestamps();
        
            $table->foreign('id_barang')->references('id')->on('m_barang');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
