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
        $allArray = $user->count();
        $allUser = 0;
        $oneUser = 0;
        $twoUser = 0;
        $threeUser = 0;
        $fourUser = 0;
        $display = "";
        foreach ($user as $arrKey => $value) {
            $arr = (array)$value;
            $isOK = true;
            $errorAttempt = 0;
            foreach ($arr as $key => $arrValue) {
                if($key != 'facebook' && $key != 'nickname' && $key != 'ispass' && $key != 'status') {
                    if($arrValue == NULL) {
                        $isOK = false;
                        $errorAttempt++;
                    }
                }
            }
            if($isOK) {
                $allUser++;
            }
            else {
                if($errorAttempt == 1) $oneUser++;
                else if($errorAttempt == 2) $twoUser++;
                else if($errorAttempt == 3) $threeUser++;
                else if($errorAttempt == 4) $fourUser++;
            }
        }
        return "Complete : " . $allUser . "<br>" . "Required1 : " . $oneUser . "<br>". "Required2 : " . $twoUser . "<br>". "Required3 : " . $threeUser . "<br>". "Required4 : " . $fourUser . "<br>";
    }
}