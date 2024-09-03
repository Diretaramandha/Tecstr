<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function ViewKeranjang()
    {
        $data['keranjang'] = keranjang::with('produk')->get();
        $data['jumlah'] = $data['keranjang']->count();
        return view('pembeli.keranjang',$data);
    }

    public function CreateKeranjang($id)
    {   
        keranjang::create([
            'id_user' => auth()->user()->id,
            'id_produk' => $id,
            'jumlah' => 1,
        ]);

        return redirect('/home');
    }

    public function AddJumlah($id,Request $request){
        $keranjang = keranjang::Where('id',$id)->first();

        $keranjang->update([
            'jumlah' => $request->jumlah
        ]);

        return redirect('/home/keranjang');
    }

    // public function update(Request $request, $id)
    // {
    //     $cart = keranjang::find($id);
    //     $cart->jumlah = $request->input('jumlah');
    //     $cart->save();
    //     return redirect()->route('cart.index');
    // }

    // public function destroy($id)
    // {
    //     $cart = keranjang::find($id);
    //     $cart->delete();
    //     return redirect()->route('cart.index');
    // }
}
