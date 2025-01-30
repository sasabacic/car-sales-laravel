<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create(){

        //we are rendering the view with auth.signup
        return view('auth.signup');
    }
}
