<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\emailverification;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class emailVerificationController extends Controller
{
    // public function index()
    // {
    //     return view('auth.email.emailVerificationForm');
    // }


    public function index($encryptedUserId, $encryptedToken, $name)
    {
        // Decrypt the URL parameters
        $userId = decrypt($encryptedUserId);
        $token = decrypt($encryptedToken);

        // Perform your verification logic using $userId and $token

        // Pass $encryptedToken to the view
        return view('auth.email.emailVerificationForm', ['decryptedToken' => $token, 'userId' => $userId, 'name' => $name]);

    }

    public function updateEmailVerification(Request $request){

        $data = $request->all();
        $decryptedToken = $data['decryptedToken'];
        $id = $data['id'];

        $emailverification = emailverification::where('users_id',$id)->first();
        $Token =$emailverification->token;
        
        if($Token === $decryptedToken ){
      
            $is_active = emailverification::where('users_id',$id)->update(['is_active' => '1']);
            // Session::put('user_email_verified', true); 
            if(Session::has('user_email_verification')){
                Session::forget('user_email_verification');
            }
           
            return response()->json(['success' => true, 'redirect' => route('/')]);
           
        }else{
            
            return response()->json(['success' => false, 'message' => 'Failed to update email verification']);
        }
        
    }
}
