<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);//ako smo vec prijavljeni ne mozemo vidjeti register metodu
    }

    public function index()
    {   
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required',
        ]);

       if (!auth()->attempt($request->only('email','password'))){
           return back()->with('status', 'Netočni podaci za prijavu');//return back vraca na prethodnu stranicu, sa porukom u slucaju netocnih podataka
       };

        return redirect()->route('dashboard');
    }
}
