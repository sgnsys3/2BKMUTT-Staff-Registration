<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffRegisterController extends Controller
{
    public function step1() {
        return view('staffregis.step1');
    }

    public function step2() {
        return view('staffregis.step2');
    }

    public function step3() {
        return view('staffregis.step3');
    }
}