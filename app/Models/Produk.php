<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'deskripsi'
    ];
}
