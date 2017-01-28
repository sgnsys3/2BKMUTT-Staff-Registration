<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    public function checkCompleteUser() {
        $user = DB::table('user_profiles')->join('user_answers','user_profiles.user_id','user_answers.user_id')->get();
        $display = "";
        foreach ($user as $arrKey => $value) {
            $arr = (array)$value;
            $isOK = true;
            $tempError = "";
            foreach ($arr as $key => $arrValue) {
                if( $key != 'facebook' && 
                    $key != 'nickname' && 
                    $key != 'ispass' && 
                    $key != 'status' &&
                    $key != 'allergies' &&
                    $key != 'drug' &&
                    $key != 'mooban' &&
                    $key != 'soi' &&
                    $key != 'dad_name' &&
                    $key != 'dad_lastname' &&
                    $key != 'dad_telephone' &&
                    $key != 'mom_name' &&
                    $key != 'mom_lastname' &&
                    $key != 'mom_telephone') {
                    if($arrValue == NULL) {
                        $isOK = false;
                        $tempError .= $key . " ";
                    }
                }
            }
            if($isOK) {
                $display .= '<div style="color:green">'. $arr['name'] . " " . $arr['lastname'] . ' TEL: ' . $arr['telephone'] . ' ' . '</div><br>';
            }
            else {
                $display .= '<div style="color:red">'. $arr['name'] . " " . $arr['lastname'] . ' TEL: ' . $arr['telephone'] .' Missing: ' . $tempError .'</div><br>';
            }
        }
        return $display;
    }
}