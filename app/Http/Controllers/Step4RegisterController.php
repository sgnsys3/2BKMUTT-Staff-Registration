<?php

namespace App\Http\Controllers;
use App\UserProfile;
use App\UserAnswer;
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
        return view('staffregis.quiz',['currentData' => UserAnswer::where('user_id',Auth::id())->first()]);
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function uploadDoc(Request $request) {
        $this->validate($request, [
            'uploaddoc' => 'file|required',
            'picture' => 'file|required'
        ]);
        $userProfile = UserProfile::firstOrNew(['user_id' => Auth::id()]);
        $picture = $request->file('picture');
        $file = $request->file('uploaddoc');
        $name = Auth::id() . "_" . $userProfile->name . "-" . $userProfile->lastname . ".pdf";
        $pictureName = Auth::id() . "_" . $userProfile->name . "-" . $userProfile->lastname . "." .$request->picture->extension();
        $file = $file->move(storage_path('app/uploads/pdf_approve'), $name);
        $picture = $picture->move(storage_path('app/uploads/pictures'), $pictureName);
        $userProfile->image_filename = $pictureName;
        $userProfile->approve_filename = $name;
        $userProfile->save();
        return view('staffregis.step4',['currentData' => UserProfile::where('user_id',Auth::id())->first()]);
    }
}