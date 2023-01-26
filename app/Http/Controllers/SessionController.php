<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index() {

        return view('sesi.index');
    }

    function login(Request $request) {

        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email Wajib di isi',
                'password.required' => 'Password Wajib di isi'
            ]
        );

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infoLogin)){
            return redirect()->to('contact')->with('success', 'Berhasil Login');
        }else {

            return redirect('sesi')->withErrors('Gagal Login email dan password tidak valid !!!');
        }
    }

    function logout() {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }

}
