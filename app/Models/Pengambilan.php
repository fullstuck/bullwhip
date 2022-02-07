<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    protected $table = 'pengambilan';

    protected $fillable = [
        'nama_pengambil', 'id_barang', 'jumlah_pengambilan'
    ];
}
