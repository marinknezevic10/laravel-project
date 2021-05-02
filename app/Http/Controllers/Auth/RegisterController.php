<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);//ako smo vec prijavljeni ne mozemo vidjeti register metodu
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)//sadrzi sve informacije o requestu
    {
        //validation
        //dd($request->email);//pohranjivanje emaila od korisnika
        $this->validate($request, [//ako korisnik unese krive informacije vraca ga nazad i ispisuje greske
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed',
        ]);

        User::create([//pohranjivanje usera
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        //prijavljivanje korisnika
        auth()->attempt($request->only('email','password'));//lakši način nego ovaj ispod
           // 'email'=>$request->email,
            //'password'=>$request->email,
        //])

        return redirect()->route('dashboard');//gdje idemo nakon registracije
        
        //store user
        //sign the user
        //redirect
    }
}
