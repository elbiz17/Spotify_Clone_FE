<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterSpotifyController extends Controller
{
    //
    public function index(){
        return view('/register/index',[
            'title' => 'Register'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/')->with('status', 'user baru telah ditambahkan');
      
    }
}
