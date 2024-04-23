<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'tb_divisi';
    protected $primaryKey = 'id_divisi';

    protected $fillable = ['id_divisi', 'nama_divisi', 'created_at', 'updated_at'];
}
