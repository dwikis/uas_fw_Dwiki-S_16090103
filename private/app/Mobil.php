<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Mobil extends Model
{
    use SoftDeletes;
    protected $table = ('tb_mobil');
    protected $fillable = ['nama_mobil','fasilitas','harga','gambar'];
}