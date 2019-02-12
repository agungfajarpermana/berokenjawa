<?php

namespace App\Http\Controllers;

use App\Http\Requests\ErrorFormEmail;
use App\Events\CreateEmailUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendEmail(ErrorFormEmail $request)
    {
        if(!$request->ajax()) dd('Woow, Hayoo Mau Ngapin!');

        $data = [
            'name' => $request->name,
            'phone'=> $request->phones,
            'email'=> $request->email,
            'pesan'=> $request->pesan
        ];

        event(new CreateEmailUser($data));
    }
}
