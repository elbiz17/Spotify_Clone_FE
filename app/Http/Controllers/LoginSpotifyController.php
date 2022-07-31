<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginSpotifyController extends Controller
{
    //
    public function index(){
        return view('login.index',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){

        $message =[
            'required'=>':attribute wajib diisi',
            'min'=>':attribute minimal 5 karakter'

        ];
        $credentials = $request->validate([
            'username' => 'required|min:4',
            'password' => 'required|min:5'
        ], $message);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }
        return back()->with('loginError', 'Incorrect username and password');   
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
