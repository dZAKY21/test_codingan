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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
<<<<<<< Updated upstream:amamybakery/database/migrations/2023_12_09_152436_create_suppliers_table.php
            $table->string('nama_supplier', 50);
            $table->string('barang', 50);
            $table->string('alamat_supplier', 100);
            $table->foreign('kategori_produk')->references('id')->on('kategori_produks')->restrictOnDelete()->restrictOnUpdate;
=======
            $table->string('admin', 50);
            $table->string('customer', 50);
>>>>>>> Stashed changes:amamybakery/database/migrations/2023_12_03_154026_create_roles_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
