<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function login(){
        return view("page.auth.login");
    }
    
    public function auth(Request $request){
        $request->validate([
            "ugm_id"=> "required",
            "password"=>"required"
        ]);
        $request['email'] = $request['ugm_id']."@mail.ugm.ac.id";
        // if (Auth::guard('web')->attempt(['email' => $request['email'], 'password' => 
        // $request['password']])) {
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('dashboard'));
        // }
        $credentials =[
            "email"=>$request['email'],
            "password"=>$request['password']
        ];
        if (Auth::attempt($credentials)) {
            session(['data' => Auth::user()]);
            return redirect()->intended('dashboard');         
        } 

        if (Auth::guard('admin')->attempt( $credentials )) {
            session(['data' => Auth::guard('admin')->user()]);
            return redirect()->intended('dashboard');         
        } 

         
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput(); 
    }

    public function logout(){
        Auth::logout();
        session()->flush();

        return redirect('/login');
    }

}
