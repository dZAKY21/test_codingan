<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama_produk', 50);
            $table->decimal('harga', 8, 2);
            $table->integer('stok', 10);
            $table->string('deskripsi');
            $table->uuid('kategori_produk_id');
            $table->foreign('kategori_produk_id')->references('id')->on('kategori_produk')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
