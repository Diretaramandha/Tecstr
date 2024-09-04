<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class keranjangController extends Controller
{
    public function ViewKeranjang()
    {
        $user_id = Auth::id(); // Get the ID of the logged-in user
        $data['keranjang'] = Keranjang::where('id_user', $user_id)
                                    ->with('produk')
                                    ->get();
        $data['jumlah'] = $data['keranjang']->count();
        // dd($data['keranjang']);
        return view('pembeli.keranjang', $data);
    }

    public function CreateKeranjang($id)
    {   
        // keranjang::create([
        //     'id_user' => auth()->user()->id,
        //     'id_produk' => $id,
        //     'jumlah' => 1,
        // ]);
        $user = Auth::user()->id;
        
    keranjang::updateOrInsert(
        [
            'id_user' => $user,
            'id_produk' => $id,
        ],
        [
            'jumlah' => DB::raw('COALESCE(jumlah, 0) + 1'),
        ]
    );


        return redirect('/home');
    }

    function HapusKeranjang(Request $request){
        keranjang::Where('id',$request->id)->delete();

        return redirect()->back();
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
