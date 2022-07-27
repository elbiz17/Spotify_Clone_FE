<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    //

    public function index(){
        return view('index',[
            'title' => 'Home'
        ]);
    }

    public function create(){
        return view('login/post/create');
    }

    
}
