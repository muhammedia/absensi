<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaranSiswa extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = ['pembayaran_siswa'];
    public $timestamps = false;
}