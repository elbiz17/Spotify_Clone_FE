<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginSpotifyController extends Controller
{
    //
    public function index(){
        return view('login.index',[
            'title' => 'Login'
        ]);
    }
}
