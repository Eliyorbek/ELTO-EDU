<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    
    public function register(){
        return view("auth.register");
    }
}
