<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class transaksiController extends Controller
{
    public function ViewTransaksi() {
        $data['produk'] = Transaksi::with('produk')->first();
        $data['user'] = Transaksi::with('user')->first();

        // dd($data['produk']);
        return view('pembeli.transaksi',$data);
    }

    public function ViewHistory() {
        $data['transaksi'] = Transaksi::with('produk','user')->get();

        // dd($data['transaksi']);
        return view('pembeli.riwayat-transaksi',$data);
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

        Alert::success('Berhasil', 'Data produk telah berhasil di tambahkan ke transaksi');
        return redirect('/transaksi');
    }
    
    public function UpdateTransaksi(Request $request){
        // $user = Auth::id();
        // $produk = Produk::find($request->id);
        // $transaksi = Transaksi::find($request->id); // Use find instead of Where
        // $total_produk = $request->total_produk; // Assume this is the total product quantity from the form input
        // $total_harga = $produk->harga * $total_produk;
        // $tipe_pembayaran = $request->payment_type; // Get the payment type from the form input
    
        // $transaksi->update([
        //     'id_users' => $user,
        //     'id_produk' => $produk->id,
        //     'tgl_pemesanan' => now(),
        //     'tipe_pembayaran' => $tipe_pembayaran, // Use the selected payment type
        //     'total_produk' => $request->total_produk,
        //     'total_harga' => $total_harga,
        // ]);

        $transaksi = Transaksi::find($request->id);
        $total = $transaksi->total_harga * $transaksi->total_produk; // Assuming you want to update the transaksi with ID 1
        $transaksi->update([
            'id_produk' => $request->id,
            'tgl_pemesanan' => now(), // or Carbon::parse('2024-09-05 00:04:02')
            // 'total_produk' => $request->total_produk, // Get the total product quantity from the form input
            'total_harga' => $total,
        ]);
        $transaksi->save(); // Save the changes
        Alert::success('Selamat Transaksi Anda Berhasil', 'Data produk telah berhasil disimpan');
        return redirect('/home');
        // dd($transaksi);
    }

    public function TambahJumlah($id,Request $request){
        $transaksi = Transaksi::Where('id',$id)->first();

        $transaksi->update([
            'total_produk' => $request->total_produk
        ]);

        Alert::success('Berhasil', 'JUmlah Berhasil di tambahkan'); 
        return redirect('/transaksi');
    }

    public function VKTransaksi(){
        // $user_id = Auth::id(); // Get the ID of the logged-in user
        // $data['produk'] = Keranjang::where('id_user', $user_id)
        //                             ->with('produk')
        //                             ->get();

        return view('pembeli.chekout');
    }

    // public function KeranjangTransaksi(Request $request){
    //     $user = Auth::id();
    //     $keranjang = Keranjang->with;
    //     $produkIds = $request->input('produk_ids');
    //     $jumlah = $request->input('jumlah');
    
    //     // Convert input values to arrays
    //     $produkIdsArray = array_map('intval', $produkIds);
    //     $jumlahArray = array_map('intval', $jumlah);
    
    //     // Create a new transaction
    //     $transaksi = new Transaksi();
    //     $transaksi->id_users = $user;
    //     $transaksi->id_produk = "";
    //     $transaksi->tgl_pemesanan = now();
    //     $transaksi->tipe_pembayaran = 'dana';
    //     $transaksi->total_harga = 0;
    //     $transaksi->save();
        
    //     // Create a new transaksi_produk for each product
    //     foreach ($produkIdsArray as $index => $produkId) {
    //         $transaksiProduk = new Transaksi();
    //         $transaksiProduk->id_transaksi = $transaksi->id;
    //         $transaksiProduk->id_produk = $produkId;
    //         $transaksiProduk->jumlah = $jumlahArray[$index];
    //         $transaksiProduk->save();
    //     }
    
    //     return redirect('/keranjang/transaksi');
    // }
}
