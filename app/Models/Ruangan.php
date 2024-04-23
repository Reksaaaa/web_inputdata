<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $table = 'tb_ruangan';
    protected $primaryKey = 'id_ruangan';

    protected $fillable = ['id_ruangan', 'nama_ruangan', 'created_at', 'updated_at'];
}
