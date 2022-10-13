<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthorizeRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function login(AuthorizeRequest $request){
        $credentials = [
            'email' =>$request->get('email'),
            'password' =>$request->get('password')
        ];

        if(Auth::attempt($credentials)){
            //$products = Product::with('category')->get();
            return redirect()->route('products')->with('status','Вы успешно зашли в аккаунт!');
        }
        return redirect()->route('auth')->with('status','Ваши данные не верны!');
    }

    public function create(RegisterRequest $request)
    {
        if ($request->password == $request->confirm_password) {
            User:: create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);


            return redirect()->route('auth')->with('status', 'Вы успешно зарегистрировались!');
        }
            return redirect()->route('register')->with('status','Ваши пароли не совпадают!');
    }
}
