<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = [
        'username', 'password', 'nama_pegawai', 'alamat_pegawai', 'hp_pegawai', 'id_bagian'
    ];
}
