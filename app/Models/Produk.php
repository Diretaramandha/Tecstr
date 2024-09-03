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
        return $this->belongsTo(User::class,'id'); // id di tabel kategori memiliki hubungan dengan id_kategori di tabel produk
    }

    public function keranjang()
    {
        return $this->hasMany(keranjang::class, 'id_produk');
    }
}
