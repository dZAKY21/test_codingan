<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenjualan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'data_penjualans';

    protected $fillable = [
        'tanggal',
        'nama_produk',
        'total_penjualan',
        'total_harga'
    ];
}
