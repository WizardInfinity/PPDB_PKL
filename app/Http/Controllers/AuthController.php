<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view ('login');
    }
    public function authenticating(Request $request)
    {
        Session::flash('email', $request->email);
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        // if (Auth::attempt($credentials)){
        //     $request->session()->regenerate();

        //     return redirect()-> intended('/finalproject');
        // }
        //     Session::flash('status', 'failed');
        //     Session::flash('messages', 'Password atau Email Salah!');

        //     return redirect('/website');
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect('/finalproject')->with('sukses','Enjoy It');
        } else {
            return redirect('/login')->with('failed','Email atau Password Salah!');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/website')->with('success','You have successfully logged out');
    }
    public function register()
    {
        return view ('register');
    }
    public function register_create(Request $request)
    {

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        // ],[
        //     'name.required' => 'Nama Wajib Diisi',
        //     'email.required' => 'Nama Wajib Diisi',
        //     'email.email' => 'Silahkan Masukkan Email Yang Valid',
        //     'email.unique' => 'Email Sudah Pernah Digunakan, Silahkan Pilih Email Yang Lain',
        //     'password.required' => 'Nama Wajib Diisi',
        //     'password.min' => 'Minimum Password Yang Diizinkan Adalah 6 Karakter'
        // ]);

        $request->validate([
            'name'      => 'required|unique:users,name',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6|max:12'
        ]);

        $data['name']       = $request->name;
        $data['email']      = $request->email;
        $data['password']   = Hash::make($request->password);

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            return redirect('/login')->with('success',' Please Re-Login');
        } else {
            return redirect('/register')->with('failed','Email atau Password Salah!');
        }
        
    }
}
