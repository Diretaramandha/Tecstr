<?php

use App\Http\Controllers\keranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\UserController;
use App\Models\Produk;
// use App\Models\keranjang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/register',[UserController::class,'ViewRegister']);
Route::post('/register',[UserController::class,'Register']);

Route::get('/login',[UserController::class,'viewEmail']);
Route::post('/auth',[UserController::class,'Login']);

Route::middleware(['login'])->group(function(){
    Route::get('/admin',[UserController::class,'ViewAdmin']);
    // Route::get('/logout',[UserController::class,'logout']);

    Route::get('/home',[UserController::class,'ViewHome']);

    Route::get('/home/detail/{id}',[ProdukController::class,'DetailProduk']);
    
    Route::get('/home/keranjang',[keranjangController::class,'ViewKeranjang']);
    Route::post('/home/keranjang/{id}',[keranjangController::class,'CreateKeranjang']);
    Route::get('/home/basket/hapus/{id}', [KeranjangController::class, 'HapusKeranjang']);
    Route::post('/home/keranjang/jumlah/{id}',[keranjangController::class,'AddJumlah']);
    
    Route::get('/home/profile',[UserController::class,'HomeProfile']);
    Route::get('/home/profile/{id}',[UserController::class,'UpgradeView']);
    Route::post('/home/profile/{id}',[UserController::class,'UpgradeProfile']);
    
    Route::get('/transaksi',[transaksiController::class,'ViewTransaksi']);
    Route::post('/transaksi/post',[transaksiController::class,'ViewTransaksi']);
    Route::post('/transaksi/menambah/produk/{id}',[transaksiController::class,'ViewTransaksi']);
    Route::post('/transaksi/{id}',[transaksiController::class,'CreateTransaksi']);
    
});

Route::get('/logout',[UserController::class,'logout']);

Route::middleware(['admin'])->group(function(){
    Route::get('/admin',[UserController::class,'ViewAdmin']);
    
    Route::get('/profile',[UserController::class,'ViewProfile']);
    Route::get('/profile/{id}/change',[UserController::class,'ChangeView']);
    Route::post('/profile/{id}/change',[UserController::class,'ChangeProfile']);

    Route::get('/product',[ProdukController::class,'ViewProduk']);
    Route::get('/product/create',[ProdukController::class,'ViewCreate']);
    Route::post('/product/create',[ProdukController::class,'ProdukCreate']);
    
    Route::get('/product/upgrade/{id}',[ProdukController::class,'ViewUpgrade']);
    Route::post('/product/upgrade/{id}',[ProdukController::class,'ProdukUpgrade']);
    
    Route::get('/product/delete/{id}',[ProdukController::class,'ProdukDelete']);
    });



