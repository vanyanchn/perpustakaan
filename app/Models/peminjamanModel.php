<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = [
        'tgl_peminjaman',
        'tgl_pengembalian',
        'id_siswa',
        'id_buku',
    ];
}
