<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function general(){
        return view('page.general');
    }
    public function buttons(){
        return view('page.buttons');
    }
    public function grids(){
        return view('page.grids');
    }
}
