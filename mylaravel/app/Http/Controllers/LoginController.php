<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    function index() {
        return view('login');
    }
    function login(Request $req){
        //print_r($req->input());
        $user = User::where('email',$req->email)->first();
        //print_r($user);
        if($user != null && Hash::check($req->password, $user->password)){
            $req->session()->put('user',$user);
            session((['user' => $user]));
            return redirect('/users');
        }else{
            $req->session()->flash('error', 'ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง');
            return view('login',['email'=>$req->email ]);
            return redirect('/login');
        }

    }
}