<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    protected $table = 'tb_tipe';
    protected $primaryKey = 'id_tipe';

    protected $fillable = ['id_tipe', 'nama_tipe', 'created_at', 'updated_at'];
}
