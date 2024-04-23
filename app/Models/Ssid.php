<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ssid extends Model
{
    use HasFactory;
    protected $table = 'tb_ssid';
    protected $primaryKey = 'id_ssid';

    protected $fillable =['id_ssid', 'nama_ssid', 'created_at', 'updated_at'];
}
