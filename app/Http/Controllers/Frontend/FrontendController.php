<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function blueprint(){
        return view('frontend.blueprint');
    }

    public function catalog(){
        return view('frontend.catalog');
    }

    public function about(){
        return view('frontend.about');
    }
    
    public function contact(){
        return view('frontend.contact');
    }

    public function payment(){
        return view('frontend.payment');
    }

}
