<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //adminHomeView
    public function adminHomeView(){
        return view('admin.pages.home');
    }
}
