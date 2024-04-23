<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tb_barang';
    protected $primaryKey = 'id_perangkat';

    protected $fillable = ['id_perangkat', 'kode_perangkat', 'nama_perangkat', 'id_tipe', 'created_at', 'updated_at'];
}
