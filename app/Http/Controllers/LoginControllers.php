<?php

namespace App\Http\Controllers;

use App\Http\Requests\ErrorFormLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControllers extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function submitlogin(ErrorFormLogin $request)
    {
        if(!$request->ajax()) dd('Hayo Mau ngapain!!');
        
        $credential = [
            'username' => $request->username, 
            'password' => $request->password
        ];

        // dd($credential);
        if(Auth::attempt($credential)){
            return response()->json(['status' => true]);
        }
        return response()->json([
            'status' => false,
            'msg'    => 'Username atau Password Yang Dimasukan Salah!'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
