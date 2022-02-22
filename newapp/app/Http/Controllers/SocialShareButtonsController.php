<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;

class SocialShareButtonsController extends Controller
{   
    public function index(){
        $socialShare = Share::page('http://127.0.0.1:8000','todo list')
        ->facebook()
        ->twitter()->getRawLinks();
        // dd($socialShare);
        return view('welcome', compact('socialShare'));
    }
    
}