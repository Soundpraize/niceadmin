<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function basic_tables(){
        return view('page.basic_table');
    }
}
