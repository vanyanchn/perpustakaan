<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bukuModel extends Model
{
    protected $table = 'buku';
    protected $fillable = [
        'nama_buku',
        'Jenis_buku',
    ];
}
