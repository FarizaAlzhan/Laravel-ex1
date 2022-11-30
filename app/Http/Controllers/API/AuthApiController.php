<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{

    public function registration(Request $request){
        $user = User::where('email', $request->email)->first();

        if($user) {
            return response()->json([
                'success' =>false,
                'message' => 'Email already exists'
            ]);
        }
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        return response()->json([
            'success' => true,
            'message' => 'Created'
        ]);
    }

    public function Login(Request $request){
        $credentials = $request -> only('email','password');
        $user = User::where('email',$credentials['email'])->first();
        if(!$user){
            return response()->json([
                'success' => false,
                'message' => 'Invalid email'
            ],401);
        }
        if (Auth::attempt($credentials)){
            return response()->json([
                'success' => true,
                'token' => $user->createToken($user->email)->accessToken
            ],200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Invalid email or password'
        ],401);
    }
}
