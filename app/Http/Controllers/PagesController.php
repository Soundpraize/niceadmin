<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile(){
        return view('page.profile');
    }
    public function login(){
        return view('page.login');
    }
    public function contact(){
        return view('page.contact');
    }
    public function blank(){
        return view('page.blank');
    }
    public function error(){
        return view('page.404');
    }
}
