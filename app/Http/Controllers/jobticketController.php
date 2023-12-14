<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class jobticketController extends Controller
{
    public function register(){
           return view('register');
    }

    public function register_data(Request $request){
    $user = new User();
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password); 
    $user->user_role = $request->user_role;
    $user->save();
    return redirect()->route('login'); 
    }





    public function login(){
        return view('login');
    }


}



