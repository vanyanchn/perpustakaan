<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswaModel extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nama_siswa',
        'kelas',
        'jenis_kelamin',
        
    ];
}
