<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';

    protected $fillable = [
        'nama_pemesanan', 'id_barang', 'jumlah_pesanan', 'proses'
    ];
}
