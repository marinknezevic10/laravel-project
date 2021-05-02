<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);//ne mozes pristupiti ako nisi logiran
    }

    public function index()
    {
        return view('dashboard');
    }
}
