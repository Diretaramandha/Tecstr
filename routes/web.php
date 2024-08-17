<?php

use App\Http\Controllers\UserController;
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
Route::get('/register/1',[UserController::class,'ViewStep1']);
Route::post('/register/1',[UserController::class,'step1']);

Route::get('/register/2',[UserController::class,'ViewStep2']);
Route::post('/register/2',[UserController::class,'step2']);

Route::get('/register/3',[UserController::class,'ViewStep3']);
Route::post('/register/3',[UserController::class,'step3']);

Route::get('/login',[UserController::class,'viewEmail']);
Route::post('/auth',[UserController::class,'Login']);

Route::get('/home',[UserController::class,'ViewHome']);
Route::get('/admin',[UserController::class,'ViewAdmin']);

