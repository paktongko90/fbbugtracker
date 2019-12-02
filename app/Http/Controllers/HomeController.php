<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if (auth() == true) {
            return redirect('/dashboard');
        }else{
            return view('auth.login');
        }
    }
}
