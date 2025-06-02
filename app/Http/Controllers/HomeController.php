<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $colors =['red','pink','blue','green'];
        return view('home',compact('colors'));

    }
}
