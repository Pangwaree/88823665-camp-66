<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    function __construct(){ //เหมือนconstructในjava
        $user = session()->get('user');
        if(!isset($user->id)){
            return redirect('/login');
        }
        print_r($user);
    }*/
    function index() {
        return view('home');
    }

}
