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
    
    public function postStep2(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'lastname' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|integer',
            'religion' => 'required|string',
            'disase' => 'string',
            'allergies' => 'string',
            'drug' => 'string',
            'telephone' => 'required|numeric|between:9,10',
            'email' => 'required|email'
        ]);
    }
}