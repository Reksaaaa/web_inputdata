<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cek extends Model
{
    use HasFactory;
    protected $table = 'Cek';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'kode_perangkat', 'id_tipe', 'id_ssid', 'id_ruangan', 'id_divisi', 'status', 'upload', 'download', 'keterangan', 'created_at', 'update_at'];
}
