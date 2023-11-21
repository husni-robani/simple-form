<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nik', 'phone', 'tps', 'tps_address', 'kelurahan', 'kecamatan', 'korcam', 'no_korcam'];
    protected $hidden = ['created_at', 'updated_at'];
}
