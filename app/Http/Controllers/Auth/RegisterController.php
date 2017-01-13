<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserProfile;
use App\UserAnswer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/regis/step4';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        Validator::make($data, [
            'name' => 'required|string',
            'lastname' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|integer',
            'religion' => 'required|string',
            'disase' => 'string',
            'allergies' => 'string',
            'drug' => 'string',
            'telephone' => 'required|digits_between:9,10',
            'emailUser' => 'required|email'
        ]);
        $temp = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        UserAnswer::firstOrNew(['user_id' => $temp->id])->save();
        $userData = UserProfile::firstOrNew([
            'user_id' => $temp->id
        ]);
        $userData->name = $data['name'];
        $userData->lastname = $data['lastname'];
        $userData->dob = $data['dob'];
        $userData->telephone = $data['telephone'];
        $userData->user_id = $temp->id;
        $userData->gender = $data['gender'];
        $userData->religion = $data['religion'];
        $userData->disase = $data['disase'];
        $userData->allergies = $data['allergies'];
        $userData->drug = $data['drug'];
        $userData->email = $data['emailUser'];
        $userData->save();
        return $temp;
    }
}
