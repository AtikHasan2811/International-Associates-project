<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 3;
        return view('layouts.frontend.partial.result',$data);

    }
}
