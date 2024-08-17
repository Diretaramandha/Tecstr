<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{   

    function viewEmail(){
        return view('login-email');
    }

    
    function Login(Request $request){
        $validasi = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','min:3'],
        ],[
            'password.required' => 'your password is incorrect',
            'email.required' => 'your email is incorrect',
            'email.unique' => 'Your email is already in use',
        ]);
        
        if (Auth::attempt($validasi)) {
            if (Auth::user()->role == 'seller') {
                return redirect('/admin');
                Session::flash('pesanlogin','Selamat datang, ');
            }

            return redirect('/home');
            Session::flash('pesanlogin','Selamat datang, ');
        }
        return redirect()->back();
    }

    // step-1
    function ViewStep1(){
        return view('register-page.step-1');
    }

    function step1(Request $request){

        $request->session()->put('step1', $request->all());

        return redirect('/register/2');
    }
    // step-2
    
    function ViewStep2(){
        return view('register-page.step-2');
    }

    function step2(Request $request){

        $request->session()->put('step2', $request->all());

        return redirect('/register/3');
    }

    // step-3
    function ViewStep3(){

        return view('register-page.step-3');
    }

    function step3(Request $request){
        $step1 = $request->session()->get('step1');
        $step2 = $request->session()->get('step2');
        $step3 = $request->all();

        $data = array_merge($step1, $step2,$step3);
        User::create($data);

        $request->session()->forget(['step1', 'step2']);


        return redirect('/login');
    }
    function ViewHome(){
        
        return view('pembeli.beranda');
    }
    function ViewAdmin(){
        
        return view('penjual.beranda');
    }
}
