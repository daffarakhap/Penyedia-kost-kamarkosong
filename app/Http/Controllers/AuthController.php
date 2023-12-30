<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function beranda(){
        return view('User.beranda');
    }

    public function indek(){
        return view('Pemilikkost.index');
    }

    public function registration(){
        return view('login.register');
    }

    public function tambahkos(){
        return view('Pemilikkost.tambahkos');
    }

    function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ],[
            'name.required'=>'Nama Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role,

        ]);
        return redirect('/');
    }

    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'user') {
                    return redirect('/beranda');
                }elseif (Auth::user()->role == 'pemilikkost') {
                    return redirect('/index');
                }
        }else{
            return redirect('')->withErrors('Username / Password Salah')->withInput();
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    public function hasilcariberanda(Request $request){
        if ($request->keyword) {
            $data = Kosan::where('nama_kos', 'like', '%'.$request->keyword.'%')
                ->orWhere('alamat', 'like', '%'.$request->keyword.'%')
                ->get();
        } else {
            $data = [];
        }
        return view('User.hasilcariberanda', compact('data'));
    }

    public function detailkos(){
        return view('User.detailkos');
    }

    public function daftarkosku(){
        return view('Pemilikkost.daftarkosku');
    }

}
