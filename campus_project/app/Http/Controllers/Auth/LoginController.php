<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\emailverification;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * 
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * 
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    
    public function login(Request $request)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    
        // If validation fails, return the validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        
    
        if (Auth::attempt($credentials)) {
            // Authentication passed...
    
            // Get the authenticated user
            $user = Auth::user();
            $userId = $user->id;
            session(['userId' => $userId]);
            $emailverification = emailverification::where('users_id',$userId)->first();
            $active_status = $emailverification->is_active;
            if($active_status==1){
                session(['user_id' => $user->id]);
                session(['role' => $user->role]);
                session(['active_status' => $active_status]);
                session(['name' => $user->name]);
               
        
        
                return response()->json(['success' => true, 'message' => 'success']);
            }else{
                return response()->json(['message' => 'Please confirm your email first'], 401); 
            }

            // Save the user's role in the session
      

        } else {
            // Authentication failed...
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

        
}
