<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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
                Alert::success('Wellcome to Tecstr','Wellcome');
            }
            
            return redirect('/home');
            Alert::success('Wellcome to Tecstr','wellcome');
        }
        return redirect()->back();
        Alert::error('Error','Email or Password is Uncorrect');
    }

    public function logout(){
        
        Auth::logout();

        return redirect('/login');
    }

    function ViewHome(){
        $data['user'] = User::has('produk')->with('produk')->get();
        $data['produk'] = Produk::with('user')->get();
        return view('pembeli.beranda', $data);
    }
    
    function HomeProfile(){
        $user = Auth::user()->id;
        $data['profile'] = User::find($user);
        return view('pembeli.profile',$data);
    }

    function UpgradeView(){
        $data['profile'] = Auth::user();
        return view('pembeli.upgrade-profile',$data);
    }
    function UpgradeProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'no_tlp' => ['required'],
            'alamat' => ['required'],
            'password' => ['required'],
            'foto' => ['required'],
        ]);

        if ($validator->fails()) {
            // Handle validation error
        }

        $user = User::Where('id', $request->id)->first();

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto) {
                Storage::disk('public')->delete('user/' . $user->foto);
            }

            // Upload foto baru
            $exfile = $request->file('foto')->getClientOriginalExtension();
            $newFileName = time() . "." . $exfile;
            $request->file('foto')->storeAs('user', $newFileName);
            $fileName = $newFileName;
        } else {
            // Jika tidak ada foto baru, gunakan foto lama
            $fileName = $user->foto;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'role' => 'customer',
            'alamat' => $request->alamat,
            'password' => $request->password,
            'foto' => $fileName,
        ]);
        Alert::success('Berhasil','Data User Sudah Berubah');
        return redirect('/home/profile');
    }

    function ViewRegister(){
        return view('register-page.register');
    }

    function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'unique:users'],
            'no_tlp' => ['required'],
            'alamat' => ['required'],
            'password' => ['required'],
            'foto' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if ($validator->fails()) {
            // Handle validation error
        }

        $fileName = '';
        if ($request->file('foto')) {
            $fileName = time().'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('user',$fileName);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_tlp = $request->no_tlp;
        $user->role = $request->role;
        $user->alamat = $request->alamat;
        $user->password = bcrypt($request->password);
        $user->foto = $fileName;
        $user->save();

        return redirect('/login');
    }

    function ViewAdmin(){
        $data['produk'] = Produk::all();
        $data['jumlah'] = $data['produk']->count();
        return view('penjual.beranda',$data);
    }
    function ViewProfile(){
        $user = auth()->user()->id;
        $data['profile'] = User::find($user);
        return view('penjual.profile',$data);
    }
    function ChangeView(){
        $data['profile'] = Auth::user();
        return view('penjual.upgrade-user',$data);
    }
    function ChangeProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'no_tlp' => ['required'],
            'alamat' => ['required'],
            'password' => ['required'],
            'foto' => ['required'],
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal mengubah user', 'Data user tidak valid');
            // return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::Where('id', $request->id)->first();

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto) {
                Storage::disk('public')->delete('user/' . $user->foto);
            }

            // Upload foto baru
            $exfile = $request->file('foto')->getClientOriginalExtension();
            $newFileName = time() . "." . $exfile;
            $request->file('foto')->storeAs('user', $newFileName);
            $fileName = $newFileName;
        } else {
            // Jika tidak ada foto baru, gunakan foto lama
            $fileName = $user->foto;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'role' => 'seller',
            'alamat' => $request->alamat,
            'password' => $request->password,
            'foto' => $fileName,
        ]);

        Alert::success('User berhasil ubah', 'Data user telah berhasil disimpan');
        return redirect('/profile');
    }
}
