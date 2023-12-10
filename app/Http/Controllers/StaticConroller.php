<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticConroller extends Controller
{
    // HomePage
    public function homepage(){
        return view('welcome');
    }
    //About page
    public function about () {
        return view('about');
    }
      //portofolio page
      public function portofolio () {
           return view('portoflio');
    }
    //Contact Page
    public function contact () {
        return view('contact');
    }
}
