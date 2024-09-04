<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class transaksiController extends Controller
{
    public function ViewTransaksi() {
        $data['produk'] = Transaksi::with('produk')->first();
        $data['user'] = Transaksi::with('user')->first();

        // dd($data['produk']);
        return view('pembeli.transaksi',$data);
    }
    public function CreateTransaksi($id) {
        $user = Auth::id();
        $produk = Produk::find($id);
        $total_produk = 1; // assume this is the total product quantity
        $total_harga = $produk->harga * $total_produk;
        Transaksi::create([
            'id_users' => $user,
            'id_produk' => $produk->id,
            'tgl_pemesanan' => now(),
            'Tipe_pembayaran' => 'dana',
            'Total_produk' => $total_produk,
            'Total_harga' => $total_harga,
        ]);
        return redirect('/transaksi');
    }
}
