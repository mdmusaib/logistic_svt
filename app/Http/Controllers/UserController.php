<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**

    * @var Authenticator

    */


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $data=$request->data;
        // $validator = Validator::make([email=>$data["email"],[password=>$data["password"]]], [
        //     'email' => 'required',
        //     'password'=>'required',
        // ]);
        // if ($validator->fails()) {
        //     $message = $validator->errors()->first();
        //     $errors=$validator->errors()->first();
        //     $code='200';
        //     $response = array(
        //         'success' => false,
        //         'message' => $message,
        //         "errors" => $errors
        //     );
        //     return new JsonResponse($response, $code);
        // }
        $email = $data['email'];
        $password = $data['password'];
       
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
        }
        if (!Hash::check($password, $user->password)) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
        }

        $token = User::where('email', $request->email)->update(array('api_token' => Str::random(60)));
        
        $token= $user->refresh();

        Auth::login($user);

        return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
    }

    public function logout(Request $request)
    {
        // User::find(Auth::user()->id)->update(['api_token' => null]);

        return response()->json(
            ['code' => 200, 'message'=> 'user logged out'],
            200
        );
    }
}
