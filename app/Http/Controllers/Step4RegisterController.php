<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class Step4RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function step4() {
        return view('staffregis.step4');
    }

    public function quiz() {
        return view('staffregis.quiz');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}