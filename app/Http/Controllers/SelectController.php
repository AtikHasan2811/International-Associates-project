<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function security(){
        $data = array();
        $data['menu_active']= 2;
        return view('layouts.frontend.partial.select.security',$data);
    }
}
