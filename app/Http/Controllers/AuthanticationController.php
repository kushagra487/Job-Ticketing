<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthanticationController extends Controller
{

    public function register(){
        return view('register');
    }

    public function register_data(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'nullable',
            'email' => 'required|email|unique:users,email',
            'user_role' => 'required|in:1,2',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            // echo 'if';die;
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            
            // echo 'else';die;
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password); 
            $user->user_role = $request->user_role;
            $user->save();

            return redirect()->route('login')->with('success', 'Account created successfully');
        }
        // return redirect()->route('login'); 
    }

    public function login() {
        return view('login');
    }

    public function loginAuth(Request $req) {
        $user = User::where('email', $req->email)->first();

        if ($user && password_verify($req->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('dashboard');
        } else {
            return view('login')->with('error', 'Credentials do not match.');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }
}
