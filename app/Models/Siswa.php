<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    protected $table = 'siswa';
    // untuk memberikan izin dalam menambahkan data
    protected $fillable = ['nama', 'nis', 'tgl_lahir'];
}
