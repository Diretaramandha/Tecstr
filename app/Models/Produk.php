<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user'); // id di tabel kategori memiliki hubungan dengan id_kategori di tabel produk
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'id_produk');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_produk');
    }
}
