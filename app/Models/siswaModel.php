<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswaModel extends Model
{
    protected $table = 'siswa';
    protected $guarded = ['id_fasilitas', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_detail_transaski';
}
