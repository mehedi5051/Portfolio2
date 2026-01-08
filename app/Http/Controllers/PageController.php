<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('frontend.pages.index');
    }
    function resume(){
        return view('frontend.pages.resume');
    }
    function projects(){
        return view('frontend.pages.projects');
    }
    function contact(){
        return view('frontend.pages.contact');
    }
}
