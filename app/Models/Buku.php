<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['judul_buku','nama_pengarang', 'nama_penerbit','gambar_buku','tahun_terbit','jumlah_buku'];
    protected $table = 'buku';
    public $timestamps = false;
}
