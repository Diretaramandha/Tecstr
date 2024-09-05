<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    function ViewProduk(){
        $data['produk'] = Produk::all();

        return view('penjual.Produk',$data);
    }
    function ViewCreate(){
        $data['user'] = Auth::user();
        return view('penjual.create-produk',$data);
        
    }
    function ProdukCreate(Request $request){

        $validator = Validator::make($request->all(),[
            'id_user' =>['required'],
            'produk' =>['required'],
            'deskripsi' =>['required'],
            'kategori' =>['required'],
            'harga' =>['required'],
            'stok' =>['required'],
            'foto' =>['required'],
            // 'produk_terjual' =>'[]',
        ]);

        if ($validator->fails()) {
            // Add Sweet Alert for failure
            Alert::error('Gagal membuat produk', 'Data produk tidak valid');
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        
        $fileName = '';
        if ($request->file('foto')) {
            $exfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$exfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }
        $user = User::Where('name',$request->id_user)->first();
        Produk::create([
            'id_user'=>$user->id,
            'produk'=>$request->produk,
            'deskripsi'=>$request->deskripsi,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'foto' => $fileName,
            'produk_terjual'=>0,
        ]);
        Alert::success('Produk berhasil dibuat', 'Data produk telah berhasil disimpan');
        return redirect('/product');
    }
    function ViewUpgrade($id){
        $data['produk'] = Produk::where('id', $id)->with('user')->first();
        return view('penjual.update-produk', $data);
    }

    function ProdukUpgrade(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'id_user' => ['required'],
            'produk' => ['required'],
            'deskripsi' => ['required'],
            'kategori' => ['required'],
            'harga' => ['required'],
            'stok' => ['required'],
            // 'foto' => ['required'],
        ]);

        if ($validator->fails()) {
            // Add Sweet Alert for failure
            Alert::error('Gagal membuat produk', 'Data produk tidak valid');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $produk = Produk::where('id', $id)->with('user')->first();

        // Cek apakah ada foto baru yang diupload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($produk->foto) {
                Storage::delete('foto/' . $produk->foto);
            }

            // Upload foto baru
            $exfile = $request->file('foto')->getClientOriginalExtension();
            $newFileName = time() . "." . $exfile;
            $request->file('foto')->storeAs('foto', $newFileName);
            $fileName = $newFileName;
        } else {
            // Jika tidak ada foto baru, gunakan foto lama
            $fileName = $produk->foto;
        }

        $user = User::Where('name', $request->id_user)->first();
        $produk->update([
            'id_user' => $user->id,
            'produk' => $request->produk,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $fileName,
            'produk_terjual' => 0,
        ]);
        Alert::success('Produk berhasil ubah', 'Data produk telah berhasil disimpan');
        return redirect('/product');
    }

    function ProdukDelete(Request $request){
       Produk::Where('id',$request->id)->delete();
       Alert::success('Produk berhasil dihapus', 'Data produk telah berhasil didelete');
       return redirect('/product');
    }

    function DetailProduk($id){
        $data['produk'] = Produk::Where('id',$id)->first();
        return view('pembeli.detail-produk',$data);

    }
}
