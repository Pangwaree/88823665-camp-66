<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\User;

class UserController extends Controller
{
    function index(){
        $user = User::all();
        return view('user', ['user' => $user]);
    }
}