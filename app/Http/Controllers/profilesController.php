<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class profilesController extends Controller
{
    //
    public function index($user)
    {
        //dd($user); //it stops the process here and displays whatever is present
        $user= User::findOrFail ($user);
        return view('home',[
            'user'=> $user,
        ]);
    }
}
