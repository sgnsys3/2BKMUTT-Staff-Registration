<?php

namespace App\Http\Controllers;
use App\UserProfile;
use Auth;

use Illuminate\Http\Request;

class Step4RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function step4() {
        return view('staffregis.step4',['currentData' => UserProfile::where('user_id',Auth::id())->first()]);
    }

    public function quiz() {
        return view('staffregis.quiz');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}