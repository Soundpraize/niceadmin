<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form_element(){
        return view('page.form_component');
    }
    public function form_validation(){
        return view('page.form_validation');
    }
}
