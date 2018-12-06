<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //


    public function home(){
        return view('myviews.home');
    }

    public function about(){
        return view('myviews.about');
    }
    
    public function services(){
        return view('myviews.services');
    }    
}
