<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function view_dashboard(){
        return view('admin.dashboard');
    }
}
