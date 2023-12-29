<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use APP\Mail\verifyMail;
use App\Models\emailverification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

   
        $user =  User::create([
            'name' => $data['name'],
            'role' => 'Editor',
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
        Session::put('user_email_verification', true); 
        $validToken = rand(10, 100) . '2023';
        $get_token = new emailverification();
        $get_token->token = $validToken;
        $get_token->email = $data['email'];
        $get_token->users_id = $user->id;
        $get_token->save();
        $user_email = $data['email'];
        $user_name= $data['name'];

        $encryptedUserId = encrypt($user->id);
        $encryptedToken = encrypt($validToken);

        Mail::to($data['email'])->send(new \App\Mail\verifyMail($user_email,$validToken, $user_name, $encryptedUserId, $encryptedToken));


        return $user ;
    }
}
