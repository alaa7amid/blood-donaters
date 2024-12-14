<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Donate;
use App\Models\Requsting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class frontController extends Controller
{
    //home page
    public function homePage(){
        return view('frontend.home');
    }

    //about page
    public function aboutPage(){
        return view('frontend.about');
    }

    //process page
    public function processPage(){
        return view('frontend.process');
    }

    //location page
    public function locationPage(){
        return view('frontend.location');
    }


    //seccess page
    public function seccessPage(){
        return view('frontend.seccess-info');
    }
}
