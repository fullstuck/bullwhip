<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = 'produksi';

    protected $fillable = [
        'id_pesanan', 'id_barang', 'jumlah_produksi', 'lead_time'
    ];
}
